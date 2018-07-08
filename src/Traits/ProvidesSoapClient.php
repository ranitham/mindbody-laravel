<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;

trait ProvidesSoapClient
{

    /**
     * @param $methodName
     * @return \SoapClient
     * @throws MindbodyErrorException
     */
    private function getSoapClientForMethod($methodName)
    {
        $debug = config('app.debug');


        foreach ($this->settings[$this->connection]['services'] as $service) {
            try {
                $reflector = new \ReflectionClass($service);
                if ($reflector->hasMethod($methodName)) {
                    return $reflector->newInstance([ 'trace' => ($debug ? 1 : 0)]);
                }

            } catch (\ReflectionException $e) {
                throw new MindbodyErrorException("Could not search for: $methodName" . " in: $service");
            }

        }


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