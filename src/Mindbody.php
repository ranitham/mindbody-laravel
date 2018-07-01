<?php

namespace Nlocascio\Mindbody;

use Nlocascio\Mindbody\Traits\ProvidesMindbodyCredentials;
use Nlocascio\Mindbody\Traits\ProvidesSoapClient;
use Nlocascio\Mindbody\Traits\ValidatesApiResponses;

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
     * @param $request
     * @return mixed
     */
    private function callMindbodyApi($methodName, $request)
    {
        $client = $this->getSoapClientForMethod($methodName);

        $reflector = new \ReflectionObject($client);
        $argClass = $reflector->getNamespaceName() . "\\". $methodName;
        $reqClass = $argClass . "Request";


        $creds = $this->getSourceCredentials();

        $credClass = $reflector->getNamespaceName()."\\"."SourceCredentials";

        $sourceCreds = new $credClass();
        $sourceCreds->setSourceName($creds['SourceName']);
        $sourceCreds->setPassword($creds['Password']);
        $sourceCreds->setSiteIDs($creds['SiteIDs']);

        $creds = $this->getUserCredentials();
        $credClass = $reflector->getNamespaceName()."\\"."UserCredentials";
        $userCreds = new $credClass();
        $userCreds->setUserName($creds['Username']);
        $userCreds->setPassword($creds['Password']);
        $userCreds->setSiteIDs($creds['SiteIDs']);


        if(is_array($request))
        {
            $req = new $reqClass;
            foreach ($request as $key => $value)
            {
                $setter = "set".$key;
                $req->$setter($value);
            }


            $arg = new $argClass($req);
            $request = $arg;
        }

        $request->getRequest()->setSourceCredentials($sourceCreds)->setUserCredentials($userCreds);

        $response = $client->$methodName($request);

/*        $response = $client->$methodName([
            'Request' => array_merge($this->getCredentials(), $request)
        ])->{$methodName . 'Result'};
*/
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