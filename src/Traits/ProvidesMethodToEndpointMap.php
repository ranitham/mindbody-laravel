<?php

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
    private static $methodToEndpointMap = [];

    /**
     * Undocumented function
     *
     * @param array<string, \Nlocascio\Mindbody\Api\ApiInterface> $mindbodyApiEndpoints
     *
     * @return array<string, callable>
     */
    public static function initialiseMaps(array $mindbodyApiEndpoints): array
    {
        foreach ($mindbodyApiEndpoints as $endpointName => $endpointInstance) {
            $reflector = new ReflectionObject($endpointInstance);
            $publicEndpointMethods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);

            foreach ($publicEndpointMethods as $publicEndpointMethod) {
                if (static::isSwaggerCodegenApiMethodName($publicEndpointMethod->name, $endpointName)) {
                    // Add the method to the map
                    /** @var callable */
                    $callable = [$endpointInstance, $publicEndpointMethod->name];

                    static::$methodToEndpointMap[$publicEndpointMethod->name] = $callable;

                    // Add the method to the Alias map
                    $shortMethodName = \substr($publicEndpointMethod->name, \strlen($endpointName)); // trim the endpoint name off the method name
                    static::$methodToEndpointMap[$shortMethodName] = $callable;
                }
            }
        }

        return static::$methodToEndpointMap;
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
        if (\array_key_exists($methodName, static::$methodToEndpointMap)) {
            return static::$methodToEndpointMap[$methodName];
        }

        throw new MindbodyErrorException("Called unknown MINDBODY API Method: $methodName");
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
