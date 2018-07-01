<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;

trait ProvidesSoapClient
{
    /**
     * @param $wsdl
     * @return \SoapClient
     */
    private function soapClient($wsdl)
    {
        return new \SoapClient($wsdl, $this->getSoapOptions());
    }

    /**
     * @param $methodName
     * @return \SoapClient
     * @throws MindbodyErrorException
     */
    private function getSoapClientForMethod($methodName)
    {
        foreach ($this->settings[$this->connection]['services'] as $service) {
            try
            {
                $reflector = new \ReflectionClass($service);
                if($reflector->hasMethod($methodName))
                {
                    return $reflector->newInstance();
                }

            }catch (\ReflectionException $e)
            {
                throw new MindbodyErrorException("Could not search for: $methodName" . " in: $service");
            }

/*
            $client = new $service;
            $methods = get_class_methods($client);
            if (in_array($methodName, $methods)) {
                return $client;
            }
*/
        }

/*
        foreach ($this->settings[$this->connection]['endpoints'] as $wsdl) {
            $client = $this->soapClient($wsdl);

            if (str_contains(implode(" ", $client->__getFunctions()), " " . $methodName . "(")) {
                return $client;
            }
        }
*/
        throw new MindbodyErrorException("Called unknown MINDBODY API Method: $methodName");
    }

    /**
     * @return mixed
     */
    public function getSoapOptions()
    {
        return config('mindbody.soap_options');
    }
}