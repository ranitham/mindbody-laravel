<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Tests;

use Nlocascio\Mindbody\Contracts\MindbodyInterface;
use Nlocascio\Mindbody\Mindbody;
use Nlocascio\Mindbody\MindbodyServiceProvider;
use Nlocascio\Mindbody\Tests\TestCase as BaseTestCase;

class MindbodyServiceProviderTest extends BaseTestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_provides_the_mindbody_class()
    {
        $serviceProvider = new MindbodyServiceProvider(null);

        $this->assertEquals($serviceProvider->provides(), [MindbodyInterface::class, Mindbody::class]);
    }
}