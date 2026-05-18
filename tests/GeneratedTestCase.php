<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Application;
use Nlocascio\Mindbody\Contracts\MindbodyInterface;
use Nlocascio\Mindbody\Mindbody;

/**
 * Base test case for generated swagger tests.
 *
 * Configures the package with fake credentials and intercepts all Guzzle HTTP
 * requests with an in-memory handler that returns {"Status":"Success"}.
 * No .env file or real MINDBODY credentials are required.
 */
abstract class GeneratedTestCase extends TestCase
{
    /**
     * Set fake configuration so Mindbody::__construct() receives non-null strings.
     *
     * @param Application $app
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('mindbody.source_name', 'test-source');
        $app['config']->set('mindbody.apikey', 'test-api-key');
        $app['config']->set('mindbody.site_id', '-99');
        $app['config']->set('mindbody.source_credentials.username', '_test-source');
        $app['config']->set('mindbody.source_credentials.password', 'test-password');
        $app['config']->set('mindbody.verify_ssl', false);
        $app['config']->set('mindbody.audit', false);
        $app['config']->set('mindbody.debug', false);
    }

    public function setUp(): void
    {
        parent::setUp();

        // Replace the singleton with a Mindbody instance that uses an in-memory
        // Guzzle handler — every request returns {"Status":"Success"} immediately.
        $this->app->instance(MindbodyInterface::class, new Mindbody($this->makeMockHttpClient()));
    }

    private function makeMockHttpClient(): GuzzleClient
    {
        $handler = fn ($request, $options) => Create::promiseFor(
            new Response(200, ['Content-Type' => 'application/json'], json_encode(['Status' => 'Success', 'AccessToken' => 'mock-token'])),
        );

        return new GuzzleClient(['handler' => HandlerStack::create($handler)]);
    }
}
