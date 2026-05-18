<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Events;

/**
 * Fired when a MINDBODY API call throws an unrecoverable exception.
 * Attach listeners to add alerting, metrics, or structured error logging.
 */
final class MindbodyApiFailed
{
    public function __construct(
        public readonly string $method,
        public readonly array $parameters,
        public readonly \Throwable $exception,
    ) {}
}
