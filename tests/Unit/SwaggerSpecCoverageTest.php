<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Tests\Unit;

use GuzzleHttp\Client as GuzzleHttpClient;
use Nlocascio\Mindbody\Configuration;
use Nlocascio\Mindbody\HeaderSelector;
use Nlocascio\Mindbody\Mindbody;
use Nlocascio\Mindbody\Traits\ProvidesMethodToEndpointMap;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Verifies that every operation declared in the Swagger specification has
 * a corresponding PHP method — both long-form (e.g. appointmentGetClasses)
 * and short-form (e.g. GetClasses) — registered in the Mindbody dispatcher.
 *
 * This is a pure reflection test; no real HTTP calls are made.
 */
final class SwaggerSpecCoverageTest extends TestCase
{
    /** @var array<string, callable> */
    private static array $methodMap = [];

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $endpoints = Mindbody::initialiseApiEndpoints(
            new Configuration(),
            new GuzzleHttpClient(),
            new HeaderSelector(),
        );

        // Anonymous class uses the trait directly to build the map without booting Laravel.
        $mapper = new class ($endpoints) {
            use ProvidesMethodToEndpointMap;

            public function __construct(array $endpoints)
            {
                $this->initialiseMaps($endpoints);
            }

            /** @return array<string, callable> */
            public function getMap(): array
            {
                return $this->methodToEndpointMap;
            }
        };

        self::$methodMap = $mapper->getMap();
    }

    /**
     * Tags excluded from coverage checks — their API classes are not registered
     * in Mindbody::ENDPOINTS and are intentionally unsupported.
     */
    private const EXCLUDED_TAGS = ['CrossSite', 'PickASpot'];

    /**
     * Returns [operationId, longFormMethod, shortFormMethod] for every path/operation
     * in mindbody.json, keyed by a human-readable label.
     *
     * @return array<string, array{operationId: string, longForm: string, shortForm: string}>
     */
    public static function swaggerOperationProvider(): array
    {
        $specPath = dirname(__DIR__, 2) . '/mindbody.json';
        /** @var array{paths: array<string, array<string, array{operationId?: string}>>} $spec */
        $spec = json_decode((string) file_get_contents($specPath), true);

        $cases = [];

        foreach ($spec['paths'] as $path => $httpMethods) {
            foreach ($httpMethods as $httpMethod => $operation) {
                $operationId = $operation['operationId'] ?? null;
                if ($operationId === null) {
                    continue;
                }

                // operationId format: "Tag_MethodName" e.g. "Appointment_GetClasses"
                [$tag, $methodSuffix] = explode('_', $operationId, 2);

                if (in_array($tag, self::EXCLUDED_TAGS, true)) {
                    continue;
                }

                // Some operationIds in the spec contain spaces (e.g. "Add Multiple Appointments").
                // Normalise by stripping spaces to match the generated PHP method names.
                $methodSuffix = str_replace(' ', '', $methodSuffix);

                $cases["{$operationId} [{$httpMethod} {$path}]"] = [
                    'operationId' => $operationId,
                    'longForm'    => lcfirst($tag) . $methodSuffix,
                    'shortForm'   => $methodSuffix,
                ];
            }
        }

        return $cases;
    }

    #[DataProvider('swaggerOperationProvider')]
    public function test_long_form_method_is_registered(
        string $operationId,
        string $longForm,
        string $shortForm,
    ): void {
        $this->assertArrayHasKey(
            $longForm,
            self::$methodMap,
            "Swagger operation '{$operationId}' is missing long-form PHP method '{$longForm}'.\n"
            . "Ensure the corresponding *Api class is listed in Mindbody::ENDPOINTS.",
        );
    }

    #[DataProvider('swaggerOperationProvider')]
    public function test_short_form_method_is_registered(
        string $operationId,
        string $longForm,
        string $shortForm,
    ): void {
        $this->assertArrayHasKey(
            $shortForm,
            self::$methodMap,
            "Swagger operation '{$operationId}' is missing short-form PHP method '{$shortForm}'.\n"
            . "Ensure the corresponding *Api class is listed in Mindbody::ENDPOINTS.",
        );
    }
}
