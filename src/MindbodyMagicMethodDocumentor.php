<?php

namespace Nlocascio\Mindbody;

use ReflectionMethod;

class MindbodyMagicMethodDocumentor
{
    public static function getEndpointMethodSignatures(): void
    {
        $endPoints = \Nlocascio\Mindbody\Mindbody::initialiseApiEndpoints(null, null, null);

        $methodSignatures = '';

        foreach (Mindbody::initialiseMaps($endPoints) as $methodName => [$endpointInstance, $targetMethodName]) {
            //skip 'withHttpInfo methods and Async methods
            if (\str_ends_with($methodName, 'WithHttpInfo') || \str_ends_with($methodName, 'Async')) {
                continue;
            }

            $methodReflector = new ReflectionMethod($endpointInstance, $targetMethodName);

            $reflectedParams = [];
            foreach ($methodReflector->getParameters() as $reflectedParam) {
                $reflectedParams[] = $reflectedParam;
            }

            $signatureParts = static::processPHPDoc($methodReflector);
            $signature = '* @method ';
            if (\array_key_exists('return', $signatureParts)) {
                $signature .= $signatureParts['return'] . ' ';
            }

            $signature .= $methodName . '(';

            if (\array_key_exists('params', $signatureParts)) {
                $trim = false;
                for ($i = 0; $i < count($signatureParts['params']); $i++) {
                    $param = $signatureParts['params'][$i];
                    $reflectedParam = $reflectedParams[$i];

                    $default = '';

                    if ($reflectedParam->isOptional()) {
                        $default = ' = ';
                        if ($reflectedParam->getDefaultValue() === null) {
                            $default .= 'null';
                        } else {
                            $reflectedParam->getDefaultValue();
                        }
                    }

                    if (\array_key_exists('type', $param) && \array_key_exists('name', $param)) {
                        $signature .= $param['type'] . ' ' . $param['name'] . $default . ', ';
                        $trim = true;
                    } elseif (\array_key_exists('name', $param)) {
                        $signature .= $param['name'] . $default . ', ';
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

    /**
     * Parses the generated docblocks and returns the components to generate
     * magic method signatures
     *
     * @param \ReflectionMethod $reflect
     *
     * @return array<string, mixed>
     */
    private static function processPHPDoc(ReflectionMethod $reflect): array
    {
        $phpDoc = ['params' => [], 'return' => null];
        $docComment = $reflect->getDocComment();
        if ($docComment === false || trim($docComment) == '') {
            return [];
        }
        $docComment = preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ ]{0,1}(.*)?#', '$1', $docComment);
        if ($docComment === null) {
            return [];
        }

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
