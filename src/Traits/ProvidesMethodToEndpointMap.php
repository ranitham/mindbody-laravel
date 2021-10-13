<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use PhpCsFixer\Cache\Signature;
use PhpParser\Node\Stmt\Continue_;
use ReflectionObject;
use ReflectionMethod;

trait ProvidesMethodToEndpointMap
{
    /**
     * Map of method name -> and array of instance and method name e.g.
     * appointmentAddAppointment => [an instance of the AppointmentApi, appointmentAddAppointment]
     * AddAppointment => [an instance of the AppointmentApi, appointmentAddAppointment]
     *
     * @var array
     */
    private static $methodToEndpointMap = [];

    protected static function initialiseMaps(array $mindbodyApiEndpoints)
    {
        foreach ($mindbodyApiEndpoints as $endpointName => $endpointInstance) {
            $reflector = new ReflectionObject($endpointInstance);
            $publicEndpointMethods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);

            foreach ($publicEndpointMethods as $publicEndpointMethod) {
                if (static::isSwaggerCodegenApiMethodName($publicEndpointMethod->name, $endpointName)) {
                    // Add the method to the map
                    static::$methodToEndpointMap[$publicEndpointMethod->name] = [$endpointInstance, $publicEndpointMethod->name];

                    // Add the method to the Alias map
                    $shortMethodName = \substr($publicEndpointMethod->name, \strlen($endpointName)); // trim the endpoint name off the method name
                    static::$methodToEndpointMap[$shortMethodName] = [$endpointInstance, $publicEndpointMethod->name];
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

    public static function getEndpointMethodSignatures()
    {
        $endPoints = \Nlocascio\Mindbody\Mindbody::initialiseApiEndpoints(null, null, null);
        \Nlocascio\Mindbody\Mindbody::initialiseMaps($endPoints);

        $methodSignatures = '';

        foreach (static::$methodToEndpointMap as $methodName => [$endpointInstance, $targetMethodName]) {
            //skip 'with HttpInfo methods and Async methods
            if (\str_ends_with($methodName, 'WithHttpInfo') || \str_ends_with($methodName, 'Async')) {
                continue;
            }

            $reflector = new ReflectionMethod($endpointInstance, $targetMethodName);

            $signatureParts = static::processPHPDoc($reflector);
            $signature = '* @method ';
            if (\array_key_exists('return', $signatureParts)) {
                $signature .= $signatureParts['return'] . ' ';
            }

            $signature .= $methodName . '(';

            if (\array_key_exists('params', $signatureParts)) {
                $trim = false;
                foreach ($signatureParts['params'] as $param) {
                    if (\array_key_exists('type', $param) && \array_key_exists('name', $param)) {
                        $signature .= $param['type'] . ' ' . $param['name'] . ', ';
                        $trim = true;
                    } elseif (\array_key_exists('name', $param)) {
                        $signature .= $param['name'] . ', ';
                        $trim = true;
                    }
                }

                if ($trim) {
                    $signature = \substr($signature, 0, -2);
                }
            }

            $signature .= ");\n";

            $methodSignatures .= $signature;
        }

        \file_put_contents('mbo_methods', $methodSignatures);
    }

    private static function processPHPDoc(ReflectionMethod $reflect)
    {
        $phpDoc = ['params' => [], 'return' => null];
        $docComment = $reflect->getDocComment();
        if (trim($docComment) == '') {
            return null;
        }
        $docComment = preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ ]{0,1}(.*)?#', '$1', $docComment);
        $docComment = ltrim($docComment, "\r\n");
        $parsedDocComment = $docComment;

        $explodedComment = \explode("\n", $parsedDocComment);

        foreach ($explodedComment as $commentLine) {
            $commentLine = rtrim($commentLine, "\r");
            if (\strpos($commentLine, '@') === \false) {
                continue;
            }

            $matches = [];

            if (\preg_match('/^(@param)(?:\s*)(.*?)(?:\s)(\$.*?)(?:\s|$)/', $commentLine, $matches)) {
                //Group 1 is @param
                //Group 2 is the type
                //Group 3 is the name
                $phpDoc['params'][] = ['type' => $matches[2], 'name' => $matches[3]];
            } elseif (\preg_match('/^(@return)(?:\s*)(.*?)(?:\s|$)/', $commentLine, $matches)) {
                $phpDoc['return'] = $matches[2];
            }
        }

        return $phpDoc;
    }
}
