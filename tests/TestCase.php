<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Tests;

use Nlocascio\Mindbody\MindbodyServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        $this->loadEnvironmentVariables();

        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [MindbodyServiceProvider::class];
    }

    /**
     *
     */
    private function loadEnvironmentVariables(): void
    {
        if (! file_exists(__DIR__ . '/../.env')) {
            return;
        }

        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
        $dotenv->required(['MINDBODY_SITEIDS', 'MINDBODY_SOURCENAME', 'MINDBODY_SOURCEPASSWORD']);
    }
}