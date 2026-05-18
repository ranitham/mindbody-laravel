<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Events;

/**
 * Fired after every successful MINDBODY API call.
 * Attach listeners to add metrics, audit trails, or custom logging.
 */
final class MindbodyApiCalled
{
    public function __construct(
        public readonly string $method,
        public readonly array $parameters,
        public readonly mixed $response,
    ) {}
}
