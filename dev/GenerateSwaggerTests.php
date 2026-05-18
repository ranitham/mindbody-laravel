<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody;

use ReflectionMethod;
use ReflectionNamedType;
use ReflectionObject;

/**
 * Dev-only tool for generating PHPUnit integration-test stubs from mindbody.json.
 *
 * Run from the repository root:
 *   php dev/GenerateSwaggerTests.php [--output-dir=tests/Generated]
 *
 * Each Swagger tag produces one test file in the output directory, e.g.:
 *   tests/Generated/AppointmentApiTest.php
 *
 * Required parameters are populated with sensible defaults derived from the
 * swagger spec. Body Request objects are constructed with setter calls for
 * every required field. Update values as needed for your test site.
 *
 * @internal
 */
class GenerateSwaggerTests
{
    /** Maps swagger primitive types → PHP literal defaults used in test stubs. */
    private const TYPE_DEFAULTS = [
        'integer' => '1',
        'number'  => '1.0',
        'boolean' => 'true',
        'string'  => "'example'",
    ];

    /** Maps swagger string formats → PHP expression defaults. */
    private const FORMAT_DEFAULTS = [
        'date-time' => "new \\DateTime('2024-01-01')",
        'date'      => "new \\DateTime('2024-01-01')",
        'byte'      => "'dGVzdA=='",
        'time'      => "'00:00:00'",
    ];

    public static function run(string $outputDir): void
    {
        $specPath = dirname(__DIR__) . '/mindbody.json';

        if (! file_exists($specPath)) {
            fwrite(STDERR, "Error: mindbody.json not found at {$specPath}\n");
            exit(1);
        }

        /** @var array{paths: array<string, array<string, mixed>>, definitions: array<string, mixed>} $spec */
        $spec = json_decode((string) file_get_contents($specPath), true, 512, JSON_THROW_ON_ERROR);

        $endpoints = Mindbody::initialiseApiEndpoints(
            new Configuration(),
            new \GuzzleHttp\Client(),
            new HeaderSelector(),
        );

        // Group swagger operations by tag.
        /** @var array<string, list<array{path: string, httpMethod: string, operation: array<string, mixed>}>> $byTag */
        $byTag = [];

        foreach ($spec['paths'] as $path => $httpMethods) {
            foreach ($httpMethods as $httpMethod => $operation) {
                $tag = $operation['tags'][0] ?? 'Unknown';
                $byTag[$tag][] = [
                    'path'       => $path,
                    'httpMethod' => strtoupper((string) $httpMethod),
                    'operation'  => $operation,
                ];
            }
        }

        if (! is_dir($outputDir) && ! mkdir($outputDir, 0755, true)) {
            fwrite(STDERR, "Error: could not create output directory {$outputDir}\n");
            exit(1);
        }

        /** @var array<string, array<string, mixed>> $definitions */
        $definitions = $spec['definitions'] ?? [];

        foreach ($byTag as $tag => $operations) {
            $endpointKey = lcfirst($tag);

            if (! isset($endpoints[$endpointKey])) {
                echo "  [SKIP] Tag '{$tag}' — no matching endpoint key '{$endpointKey}' in Mindbody::ENDPOINTS\n";
                continue;
            }

            $endpointInstance = $endpoints[$endpointKey];
            $content          = self::generateTestClass($tag, $endpointKey, $endpointInstance, $operations, $definitions);
            $filename         = "{$outputDir}/{$tag}ApiTest.php";

            file_put_contents($filename, $content);
            echo "  [OK]   Written {$filename} (" . count($operations) . " operations)\n";
        }
    }

    /**
     * @param array<int, array{path: string, httpMethod: string, operation: array<string, mixed>}> $operations
     * @param array<string, array<string, mixed>> $definitions
     */
    private static function generateTestClass(
        string $tag,
        string $endpointKey,
        object $endpointInstance,
        array $operations,
        array $definitions,
    ): string {
        $className = "{$tag}ApiTest";
        $methods   = '';

        foreach ($operations as $item) {
            $methods .= self::generateTestMethod($tag, $endpointKey, $endpointInstance, $item, $definitions);
        }

        return <<<PHP
<?php

declare(strict_types=1);

namespace Nlocascio\\Mindbody\\Tests\\Generated;

use Nlocascio\\Mindbody\\Contracts\\MindbodyInterface;
use Nlocascio\\Mindbody\\Tests\\GeneratedTestCase;
use PHPUnit\\Framework\\Attributes\\Group;

/**
 * Tests for the {$tag} API endpoints, generated from mindbody.json.
 *
 * These run without real credentials — HTTP is intercepted by a mock handler.
 * Update argument values to match your test site if running against the real API.
 *
 * Run this group only:
 *   ./vendor/bin/phpunit --group {$tag}
 */
#[Group('generated')]
#[Group('{$tag}')]
final class {$className} extends GeneratedTestCase
{
{$methods}}
PHP;
    }

    /**
     * @param array{path: string, httpMethod: string, operation: array<string, mixed>} $item
     * @param array<string, array<string, mixed>> $definitions
     */
    private static function generateTestMethod(
        string $tag,
        string $endpointKey,
        object $endpointInstance,
        array $item,
        array $definitions,
    ): string {
        $operation   = $item['operation'];
        $operationId = (string) ($operation['operationId'] ?? 'Unknown');
        $httpMethod  = $item['httpMethod'];
        $path        = $item['path'];

        [, $methodSuffix] = explode('_', $operationId, 2);
        // Normalise operationIds with spaces (spec quirk, e.g. "Add Multiple Appointments").
        $methodSuffix = str_replace(' ', '', $methodSuffix);

        $longForm  = $endpointKey . $methodSuffix;
        $shortForm = $methodSuffix;

        $summary     = trim((string) ($operation['summary'] ?? ''));
        $description = trim((string) ($operation['description'] ?? ''));

        // Gather swagger parameters for this operation.
        /** @var list<array<string, mixed>> $swaggerParams */
        $swaggerParams = $operation['parameters'] ?? [];

        // Use reflection to get the PHP method's ordered parameter names.
        $phpParams = self::getPhpMethodParams($endpointInstance, $longForm);

        // Build the argument list for the test call.
        [$setupLines, $argLines] = self::buildArgLines($phpParams, $swaggerParams, $definitions);

        $argsString = implode(",\n            ", $argLines);
        if ($argsString !== '') {
            $argsString = "\n            {$argsString},\n        ";
        }

        $setupBlock = '';
        if (! empty($setupLines)) {
            $setupBlock = implode("\n        ", $setupLines) . "\n\n        ";
        }

        // Determine response model — swagger $ref takes priority, PHP reflection as fallback.
        $assertion    = '';
        $responseRef  = '';
        $response200  = $operation['responses']['200'] ?? null;
        if (is_array($response200) && isset($response200['schema']['$ref'])) {
            $ref         = (string) $response200['schema']['$ref'];
            $parts       = explode('/', $ref);
            // Dotted definition names (e.g. "Mindbody.PublicApi.Data.Models.WrittenClassSchedulesInfo")
            // are normalised to their PHP class name equivalent (dots stripped).
            $responseRef = str_replace('.', '', (string) end($parts));
        }

        if ($responseRef !== '') {
            $assertion = "\$this->assertInstanceOf(\\Nlocascio\\Mindbody\\Model\\{$responseRef}::class, \$response);";
        } else {
            // No swagger schema — fall back to the PHP method's declared return type.
            $phpReturn = self::getPhpMethodReturnType($endpointInstance, $longForm);
            if (str_contains($phpReturn, 'Mindbody\\Model\\')) {
                $assertion = "\$this->assertInstanceOf(\\{$phpReturn}::class, \$response);";
            } elseif ($phpReturn === 'object') {
                $assertion = "\$this->assertIsObject(\$response);";
            } elseif ($phpReturn === 'array') {
                $assertion = "\$this->assertIsArray(\$response);";
            } elseif ($phpReturn === 'void') {
                $assertion = "\$this->expectNotToPerformAssertions(); // Method returns void.";
            } else {
                $assertion = "\$this->assertNotNull(\$response);";
            }
        }

        $docBlock = self::buildDocBlock($summary, $description, $httpMethod, $path, $operationId);

        $testName = 'test_' . self::toSnakeCase($methodSuffix);

        return <<<PHP
{$docBlock}
    public function {$testName}(): void
    {
        /** @var MindbodyInterface \$mindbody */
        \$mindbody = \$this->app->make(MindbodyInterface::class);

        {$setupBlock}\$response = \$mindbody->{$shortForm}({$argsString});

        {$assertion}
    }

PHP;
    }

    /**
     * Returns an ordered list of PHP parameter names for the given method.
     * Returns an empty array when the method does not exist (e.g. not yet implemented).
     *
     * @return list<array{name: string, optional: bool}>
     */
    private static function getPhpMethodParams(object $endpointInstance, string $methodName): array
    {
        if (! method_exists($endpointInstance, $methodName)) {
            return [];
        }

        $method = new ReflectionMethod($endpointInstance, $methodName);
        $params = [];

        foreach ($method->getParameters() as $param) {
            $params[] = [
                'name'     => $param->getName(),
                'optional' => $param->isOptional(),
            ];
        }

        return $params;
    }

    /**
     * Returns the return type name of a method on the given endpoint instance.
     * Returns an empty string when the method does not exist or has no declared return type.
     */
    private static function getPhpMethodReturnType(object $endpointInstance, string $methodName): string
    {
        if (! method_exists($endpointInstance, $methodName)) {
            return '';
        }

        $returnType = (new ReflectionMethod($endpointInstance, $methodName))->getReturnType();

        if ($returnType instanceof ReflectionNamedType) {
            return $returnType->getName();
        }

        return '';
    }

    /**
     * Builds ordered argument expressions and any required setup statements.
     *
     * Returns a two-element list: [setupLines, argExpressions].
     * Required parameters get a sensible default; optional ones are omitted.
     *
     * @param list<array{name: string, optional: bool}>  $phpParams
     * @param list<array<string, mixed>>                 $swaggerParams
     * @param array<string, array<string, mixed>>        $definitions
     * @return array{list<string>, list<string>}
     */
    private static function buildArgLines(array $phpParams, array $swaggerParams, array $definitions): array
    {
        // Index swagger params by their normalised PHP name so we can look them up.
        $swaggerByPhpName = [];
        foreach ($swaggerParams as $sp) {
            $phpName                    = self::swaggerParamNameToPhp((string) $sp['name']);
            $swaggerByPhpName[$phpName] = $sp;
        }

        $setupLines = [];
        $args       = [];

        foreach ($phpParams as $phpParam) {
            if ($phpParam['optional']) {
                // Stop at first optional param — omit trailing optionals.
                break;
            }

            $name      = $phpParam['name'];
            $swaggerSp = $swaggerByPhpName[$name] ?? null;

            if ($swaggerSp === null) {
                // Fallback when no swagger metadata matches the PHP param name.
                $args[] = 'null';
                continue;
            }

            [$setup, $expr] = self::buildArgExpression($name, $swaggerSp, $definitions);
            if ($setup !== '') {
                $setupLines[] = $setup;
            }
            $args[] = $expr;
        }

        return [$setupLines, $args];
    }

    /**
     * Generates a PHP argument expression for a swagger parameter, plus any
     * setup statement needed before the method call (e.g. a request object with setters).
     *
     * Returns [setupStatement, expression] where setupStatement may be empty.
     *
     * @param array<string, mixed>                $swaggerParam
     * @param array<string, array<string, mixed>> $definitions
     * @return array{string, string}
     */
    private static function buildArgExpression(string $phpName, array $swaggerParam, array $definitions): array
    {
        $type   = (string) ($swaggerParam['type'] ?? '');
        $format = (string) ($swaggerParam['format'] ?? '');
        $in     = (string) ($swaggerParam['in'] ?? '');

        if ($in === 'body') {
            // Body params carry either a $ref to a model class or an array schema.
            $schema = (array) ($swaggerParam['schema'] ?? []);
            $ref    = (string) ($schema['$ref'] ?? '');
            if ($ref !== '') {
                $parts      = explode('/', $ref);
                $modelClass = end($parts);
                $varName    = '$' . lcfirst($modelClass);
                $setup      = self::buildRequestSetup($varName, $modelClass, $definitions);
                return [$setup, $varName];
            }
            // Array-of-models body (e.g. PUT /sale/products).
            if (($schema['type'] ?? '') === 'array') {
                /** @var array<string, mixed> $items */
                $items   = (array) ($schema['items'] ?? []);
                $itemRef = (string) ($items['$ref'] ?? '');
                if ($itemRef !== '') {
                    $parts     = explode('/', $itemRef);
                    $itemClass = end($parts);
                    $varName   = '$' . lcfirst($itemClass) . 'Array';
                    $itemSetup = self::buildRequestSetup('$item', $itemClass, $definitions);
                    $setup     = $itemSetup . "\n        {$varName} = [\$item];";
                    return [$setup, $varName];
                }
                return ['', '[]'];
            }
            return ['', 'null'];
        }

        if ($type === 'array') {
            /** @var array<string, mixed> $items */
            $items       = $swaggerParam['items'] ?? [];
            $itemType    = (string) ($items['type'] ?? 'string');
            $itemDefault = self::TYPE_DEFAULTS[$itemType] ?? "'example'";
            return ['', "[{$itemDefault}]"];
        }

        if ($format !== '' && isset(self::FORMAT_DEFAULTS[$format])) {
            return ['', self::FORMAT_DEFAULTS[$format]];
        }

        $default = self::TYPE_DEFAULTS[$type] ?? "'example'";
        return ['', $default];
    }

    /**
     * Builds a variable-assignment setup statement that creates a Request model
     * and calls setters for every required field.
     *
     * @param array<string, array<string, mixed>> $definitions
     */
    private static function buildRequestSetup(string $varName, string $modelClass, array $definitions): string
    {
        $modelDef = $definitions[$modelClass] ?? [];
        $required = (array) ($modelDef['required'] ?? []);
        /** @var array<string, array<string, mixed>> $properties */
        $properties = (array) ($modelDef['properties'] ?? []);

        $fqn = "\\Nlocascio\\Mindbody\\Model\\{$modelClass}";

        if (empty($required)) {
            return "{$varName} = new {$fqn}();";
        }

        $lines   = [];
        $lines[] = "{$varName} = (new {$fqn}())";

        foreach ($required as $propName) {
            /** @var array<string, mixed> $prop */
            $prop   = $properties[$propName] ?? [];
            $value  = self::propertyDefaultValue($prop, $definitions);
            $setter = 'set' . ucfirst((string) $propName);
            $lines[] = "    ->{$setter}({$value})";
        }

        // Terminate the last setter with a semicolon.
        $last          = array_pop($lines);
        $lines[]       = $last . ';';

        return implode("\n        ", $lines);
    }

    /**
     * Returns a PHP literal default value for a swagger property definition.
     *
     * @param array<string, mixed>                $prop
     * @param array<string, array<string, mixed>> $definitions
     */
    private static function propertyDefaultValue(array $prop, array $definitions): string
    {
        $type    = (string) ($prop['type'] ?? '');
        $format  = (string) ($prop['format'] ?? '');
        $ref     = (string) ($prop['$ref'] ?? '');
        $pattern = (string) ($prop['pattern'] ?? '');

        if ($ref !== '') {
            $parts      = explode('/', $ref);
            $modelClass = end($parts);
            // For nested required models, construct a plain new instance (no recursion).
            return "new \\Nlocascio\\Mindbody\\Model\\{$modelClass}()";
        }

        if ($type === 'array') {
            /** @var array<string, mixed> $items */
            $items       = (array) ($prop['items'] ?? []);
            $itemType    = (string) ($items['type'] ?? 'string');
            $itemRef     = (string) ($items['$ref'] ?? '');
            if ($itemRef !== '') {
                $parts    = explode('/', $itemRef);
                $itemClass = end($parts);
                return "[new \\Nlocascio\\Mindbody\\Model\\{$itemClass}()]";
            }
            $itemDefault = self::TYPE_DEFAULTS[$itemType] ?? "'example'";
            return "[{$itemDefault}]";
        }

        if ($format !== '' && isset(self::FORMAT_DEFAULTS[$format])) {
            return self::FORMAT_DEFAULTS[$format];
        }

        // Pattern-based defaults for fields without a format.
        if ($pattern !== '' && $type === 'string') {
            if (str_contains($pattern, '[01]') && str_contains($pattern, '[0-5]')) {
                // HH:MM:SS time pattern
                return "'00:00:00'";
            }
            if (str_contains($pattern, '\\d{4}') || str_contains($pattern, '\d{4}')) {
                // YYYY-MM-DD date pattern
                return "'2024-01-01'";
            }
            // Base64 pattern
            if (str_contains($pattern, 'A-Za-z0-9') && str_contains($pattern, '==')) {
                return "'dGVzdA=='";
            }
        }

        return self::TYPE_DEFAULTS[$type] ?? "'example'";
    }

    /**
     * Converts a swagger parameter name such as "request.sessionTypeId" or "classScheduleId"
     * to the corresponding PHP parameter name "RequestSessionTypeId" / "ClassScheduleId".
     */
    private static function swaggerParamNameToPhp(string $swaggerName): string
    {
        // Strip the "request." prefix if present, then capitalise each segment.
        $parts = explode('.', $swaggerName);

        if (count($parts) > 1 && strtolower($parts[0]) === 'request') {
            array_shift($parts);
            array_unshift($parts, 'Request');
        }

        return implode('', array_map('ucfirst', $parts));
    }

    private static function toSnakeCase(string $methodName): string
    {
        return strtolower((string) preg_replace('/(?<!^)[A-Z]/', '_$0', $methodName));
    }

    private static function buildDocBlock(
        string $summary,
        string $description,
        string $httpMethod,
        string $path,
        string $operationId,
    ): string {
        $lines   = ["    /**"];
        $lines[] = "     * {$summary}";

        if ($description !== '' && $description !== $summary) {
            // Trim and wrap long descriptions at 100 chars per line.
            $wrapped = wordwrap(preg_replace('/\s+/', ' ', $description) ?? '', 96, "\n", false);
            $lines[] = "     *";
            foreach (explode("\n", $wrapped) as $line) {
                $lines[] = "     * {$line}";
            }
        }

        $lines[] = "     *";
        $lines[] = "     * [{$httpMethod}] {$path}";
        $lines[] = "     * operationId: {$operationId}";
        $lines[] = "     */";

        return implode("\n", $lines);
    }
}

// ---------------------------------------------------------------------------
// Entry point — only runs when this file is executed directly.
// ---------------------------------------------------------------------------

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    require dirname(__DIR__) . '/vendor/autoload.php';

    $outputDir = 'tests/Generated';

    // Allow --output-dir=path override.
    foreach ($argv as $arg) {
        if (str_starts_with($arg, '--output-dir=')) {
            $outputDir = substr($arg, strlen('--output-dir='));
        }
    }

    echo "Generating test stubs from mindbody.json → {$outputDir}/\n";
    GenerateSwaggerTests::run($outputDir);
    echo "Done.\n";
}
