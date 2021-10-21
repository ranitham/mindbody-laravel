<?php

use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Stmt\Echo_;

/**
 *
 * @param string $address
 * @return array
 * @throws ErrorException
 */
function fetchAPI(string $address): array
{
    $swaggerAPIDoc = file_get_contents($address);
    if ($swaggerAPIDoc) {
        $processedJSONAPI = processJSONApiAsText($swaggerAPIDoc);
        return json_decode($processedJSONAPI, true);
    } else {
        throw new ErrorException('Could not fetch the Mindbody API from' + $address + '\n');
    }
}

function processJSONApiAsText(string $jsonAPI): string
{
    $find = ['/public/v{version}/'];
    $replace = ['/public/v6/'];

    return str_replace($find, $replace, $jsonAPI);
}

/**
 *
 * @param array $mboAPI
 * @param string $filename
 * @return void
 */
function writeAPI(array $mboAPI, string $filename)
{
    $jsonData = json_encode($mboAPI);
    return file_put_contents($filename, $jsonData);
}

function removeParameters(array $parameters, array $keysToRemove): array
{
    $cleanedParameters = array_filter($parameters, function ($oasParameter) use ($keysToRemove) {
        return !in_array($oasParameter['name'], $keysToRemove);
    });

    return array_values($cleanedParameters);
}

function hasParameter(array $parameterArray, string $parameterName)
{
    $has = false;
    foreach ($parameterArray as $parameter) {
        $has |= $parameter['name'] == $parameterName;
    }

    return $has;
}

/**
 *
 * @param array $api
 * @return array
 */
function processAPI(array $api): array
{
    // change empty properties from arrays to objects
    foreach ($api['definitions'] as $definitionName => &$definition) {
        if ($definition['properties'] === []) {
            $definition['properties'] = new stdClass();
        }

        if ($definitionName === 'CheckoutPaymentInfo') {
            $definition['properties']['Metadata']['additionalProperties'] = true;
            $definition['properties']['Type']['enum'] = [
                'CreditCard',
                'StoredCard',
                'DirectDebit',
                'EncryptedTrackData',
                'TrackData',
                'DebitAccount',
                'Custom',
                'Comp',
                'Cash',
                'Check',
                'GiftCard',
            ];

        }

        if ($definitionName === 'CheckoutItem') {
            $definition['properties']['Metadata']['additionalProperties'] = true;
            $definition['properties']['Type']['enum'] = [
                'Service',
                'Product',
                'Package',
                'Tip',
            ];
        }
    }

    foreach ($api['paths'] as &$path) {
        // clean out version number requirement in path
        foreach ($path as $operationName => &$operation) {
            if ($operationName === 'parameters') {
                throw new Exception('Unexpected operation in MBO API');
            }

            $wantsSiteID = hasParameter($operation['parameters'], 'siteId');
            $wantsAuthorization = hasParameter($operation['parameters'], 'authorization');

            // CLean out the parameters of security related items / globals
            $operation['parameters'] = removeParameters($operation['parameters'], ['version', 'siteId', 'authorization']);

            $operation['security'][] = ['API-Key' => []];
            if ($wantsSiteID) {
                $operation['security'][] = ['siteId' => []];
            }
            if ($wantsAuthorization) {
                $operation['security'][] = ['authorization' => []];
            }
        }
    }

    $api['securityDefinitions']['siteId'] = getSecurityDefinition('siteId', 'Mindbody Site ID used for Authentication');
    $api['securityDefinitions']['authorization'] = getSecurityDefinition('authorization', 'A staff user authorization token.');

    return $api;
}

function getSecurityDefinition(string $name, $description): array
{
    return [
        'type' => 'apiKey',
        'description' => $description,
        'name' => $name,
        'in' => 'header',
    ];
}

/**
 *
 * @param bool $overwrite
 * @return void
 */
function fetchSwaggerCodegen(bool $overwrite = false)
{
    $filename = 'swagger-codegen.jar';

    if (!file_exists($filename) || $overwrite) {
        $swaggerURL = 'https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.23/swagger-codegen-cli-2.4.23.jar';
        if (file_put_contents($filename, file_get_contents($swaggerURL))) {
            echo "Downloaded the swagger-codegen binary\r\n";
        } else {
            throw new ErrorException('Could not download the swagger-codegen binary');
        }
    }
}

writeAPI(processAPI(fetchAPI('https://api.mindbodyonline.com/public/v6/swagger/doc')), './mindbody.json');

?>
