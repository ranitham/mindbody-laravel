<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Exceptions;

use Exception;

final class MindbodyErrorException extends Exception
{
    public static function unknownMethod(string $methodName): self
    {
        return new self("Called unknown MINDBODY API Method: {$methodName}");
    }

    public static function unknownEndpoint(string $endpointName): self
    {
        return new self("Could not find Endpoint: {$endpointName}");
    }
}