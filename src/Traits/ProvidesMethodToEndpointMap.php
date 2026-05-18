<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use ReflectionObject;
use ReflectionMethod;

trait ProvidesMethodToEndpointMap
{
    /**
     * Map of method name -> and array of instance and method name e.g.
     * appointmentAddAppointment => [an instance of the AppointmentApi, appointmentAddAppointment]
     * AddAppointment => [an instance of the AppointmentApi, appointmentAddAppointment]
     *
     * @var array<string, callable>
     */
    private array $methodToEndpointMap = [];

    /**
     * Build the method-name to callable map from the given API endpoint instances.
     *
     * @param array<string, \Nlocascio\Mindbody\Api\ApiInterface> $mindbodyApiEndpoints
     */
    private function initialiseMaps(array $mindbodyApiEndpoints): void
    {
        foreach ($mindbodyApiEndpoints as $endpointName => $endpointInstance) {
            $reflector = new ReflectionObject($endpointInstance);
            $publicEndpointMethods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);

            foreach ($publicEndpointMethods as $publicEndpointMethod) {
                if (self::isSwaggerCodegenApiMethodName($publicEndpointMethod->name, $endpointName)) {
                    /** @var callable */
                    $callable = [$endpointInstance, $publicEndpointMethod->name];

                    $this->methodToEndpointMap[$publicEndpointMethod->name] = $callable;

                    // Also register the short-form alias (strip the endpoint prefix)
                    $shortMethodName = \substr($publicEndpointMethod->name, \strlen($endpointName));
                    $this->methodToEndpointMap[$shortMethodName] = $callable;
                }
            }
        }
    }

    /**
     * Get a callback function corresponding to the method name
     *
     * @param string $methodName
     *
     * @return callable
     */
    protected function getRestCallForMethod(string $methodName): callable
    {
        if (\array_key_exists($methodName, $this->methodToEndpointMap)) {
            return $this->methodToEndpointMap[$methodName];
        }

        throw MindbodyErrorException::unknownMethod($methodName);
    }

    /**
     * Check if the method is a valid api call method on the endpoint
     *
     * @param string $methodName
     * @param string $endpointName
     *
     * @return boolean
     */
    private static function isSwaggerCodegenApiMethodName(string $methodName, string $endpointName): bool
    {
        return $methodName !== 'getConfig' && \str_starts_with($methodName, $endpointName);
    }
}
