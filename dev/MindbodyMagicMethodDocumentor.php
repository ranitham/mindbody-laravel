<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody;

use ReflectionMethod;
use ReflectionObject;

/**
 * Dev-only tool for regenerating the @method PHPDoc blocks on Mindbody and MBO.
 *
 * Run via: php preprocessApi.php (or equivalent artisan/script entry point)
 *
 * @internal
 */
class MindbodyMagicMethodDocumentor
{
    public static function getEndpointMethodSignatures(): void
    {
        $endPoints = Mindbody::initialiseApiEndpoints(
            new Configuration(),
            new \GuzzleHttp\Client(),
            new HeaderSelector(),
        );

        $methodSignatures = '';

        foreach ($endPoints as $endpointName => $endpointInstance) {
            $reflector = new ReflectionObject($endpointInstance);

            foreach ($reflector->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                $methodName = $method->getName();

                if ($methodName === 'getConfig' || !\str_starts_with($methodName, $endpointName)) {
                    continue;
                }

                if (\str_ends_with($methodName, 'WithHttpInfo') || \str_ends_with($methodName, 'Async')) {
                    continue;
                }

                $shortName = \substr($methodName, \strlen($endpointName));

                foreach ([$methodName, $shortName] as $name) {
                    $methodSignatures .= self::buildSignatureLine($name, $method);
                }
            }
        }

        \file_put_contents('mbo_methods', $methodSignatures);
    }

    private static function buildSignatureLine(string $name, ReflectionMethod $method): string
    {
        $signatureParts = static::processPHPDoc($method);
        $signature = '* @method static ';

        if (\array_key_exists('return', $signatureParts)) {
            $signature .= $signatureParts['return'] . ' ';
        }

        $signature .= $name . '(';

        if (\array_key_exists('params', $signatureParts)) {
            $trim = false;
            $reflectedParams = $method->getParameters();

            for ($i = 0; $i < count($signatureParts['params']); $i++) {
                $param = $signatureParts['params'][$i];
                $reflectedParam = $reflectedParams[$i];

                $default = '';
                if ($reflectedParam->isOptional()) {
                    $default = ' = ' . ($reflectedParam->getDefaultValue() === null ? 'null' : '');
                }

                if (\array_key_exists('type', $param) && \array_key_exists('name', $param)) {
                    $signature .= $param['type'] . ' ' . $param['name'] . $default . ', ';
                    $trim = true;
                } elseif (\array_key_exists('name', $param)) {
                    $signature .= $param['name'] . $default . ', ';
                    $trim = true;
                }
            }

            if ($trim) {
                $signature = \substr($signature, 0, -2);
            }
        }

        return $signature . ");\n";
    }

    /**
     * Parses the generated docblocks and returns the components to generate
     * magic method signatures.
     *
     * @param \ReflectionMethod $reflect
     *
     * @return array<string, mixed>
     */
    protected static function processPHPDoc(ReflectionMethod $reflect): array
    {
        $phpDoc = ['params' => [], 'return' => null];
        $docComment = $reflect->getDocComment();

        if ($docComment === false || trim($docComment) === '') {
            return [];
        }

        $docComment = preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ ]{0,1}(.*)?#', '$1', $docComment);
        if ($docComment === null) {
            return [];
        }

        foreach (\explode("\n", ltrim($docComment, "\r\n")) as $commentLine) {
            $commentLine = rtrim($commentLine, "\r");

            if (\strpos($commentLine, '@') === false) {
                continue;
            }

            $matches = [];

            if (\preg_match('/^(@param)(?:\s*)(.*?)(?:\s)(\$.*?)(?:\s|$)/', $commentLine, $matches)) {
                $phpDoc['params'][] = ['type' => $matches[2], 'name' => $matches[3]];
            } elseif (\preg_match('/^(@return)(?:\s*)(.*?)(?:\s|$)/', $commentLine, $matches)) {
                $phpDoc['return'] = $matches[2];
            }
        }

        return $phpDoc;
    }
}
