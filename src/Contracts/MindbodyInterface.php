<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Contracts;

/**
 * Contract for the MINDBODY API wrapper.
 *
 * All API methods are dispatched dynamically via __call. The full set of
 * available methods is documented via @method PHPDoc on the concrete
 * Mindbody class and the MBO facade.
 */
interface MindbodyInterface
{
    /**
     * Dispatch a MINDBODY API call by method name.
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    public function __call(string $methodName, array $parameters): mixed;
}
