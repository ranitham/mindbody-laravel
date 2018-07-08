<?php

namespace Nlocascio\Mindbody;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use Nlocascio\Mindbody\Traits\ProvidesMindbodyCredentials;
use Nlocascio\Mindbody\Traits\ProvidesSoapClient;
use Nlocascio\Mindbody\Traits\ValidatesApiResponses;
use Illuminate\Support\Facades\Log;
use DOMDocument;

/**
 * Class Mindbody
 * @package Nlocascio\Mindbody
 *
 */
class Mindbody
{
    use ValidatesApiResponses, ProvidesSoapClient, ProvidesMindbodyCredentials;

    private $connection;
    private $settings;

    /**
     * @param $connection
     * @param array $settings
     */
    public function __construct($connection, array $settings)
    {
        $this->connection = $connection;
        $this->settings = $settings;
    }

    /**
     * Fluent setter for the connection.
     *
     * @param null $connection
     * @return mixed
     */
    public function connection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * @param $method
     * @param array $parameters
     * @return mixed
     * @throws MindbodyErrorException
     */
    public function __call($method, array $parameters)
    {
        $this->validateSettings(
            $this->getSettings($this->connection)
        );

        $this->validateResponse(
            $response = $this->callMindbodyApi($method, $parameters[0] ?? [])
        );

        return $response;
    }

    /**
     * @param $methodName
     * @param array|\Nlocascio\Mindbody\MBOSoap\MBRequest $request
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     * @throws MindbodyErrorException
     */
    private function callMindbodyApi($methodName, $request)
    {
        $client = $this->getSoapClientForMethod($methodName);

        $reflector = new \ReflectionObject($client);
        $requestWrapper = $reflector->getNamespaceName() . "\\". $methodName;


        if(is_array($request))
        {
            $reqClass = $requestWrapper . "Request";
            $req = new $reqClass;
            foreach ($request as $key => $value)
            {
                $setter = "set".$key;
                $req->$setter($value);
            }


            $request = $req;
        }

        $request->setSourceCredentials($this->getSourceCredentials())->setUserCredentials($this->getUserCredentials());
        $wrappedRequest = new $requestWrapper($request);

        $response = $client->$methodName($wrappedRequest);


        if(config('app.debug')) {
            $dom = new DOMDocument('1.0', 'iso-8859-1');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;

            $dom->loadXML($client->__getLastRequest());

            Log::debug(Log::debug("Called function " . $methodName . $dom->saveXML()));

            $dom->loadXML($client->__getLastResponse());
            Log::debug(Log::debug("With Response:" . $dom->saveXML()));
        }

        $resultname = 'get'. $methodName . 'Result';
        return $response->$resultname();
    }

    /**
     * @param $connection
     * @return mixed
     */
    private function getSettings($connection)
    {
        return $this->settings[$connection];
    }

    /**
     * @param $settings
     * @return bool
     */
    private function validateSettings($settings)
    {
        if ( ! isset(
            $settings['site_ids'],
            $settings['source_credentials']['username'],
            $settings['source_credentials']['password']
        )
        ) {
            throw new \InvalidArgumentException('Please set MINDBODY_SITEIDS, MINDBODY_SOURCENAME, MINDBODY_SOURCEPASSWORD environment variables.');
        }

        return true;
    }

}