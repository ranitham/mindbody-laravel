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
        $debug = config('mindbody.debug');

        $scOptions = [
            'ssl' => [
                'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
                'ciphers' => 'SHA256',
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ],
        ];

        $sc = stream_context_create($scOptions);



        foreach ($this->settings[$this->connection]['services'] as $service) {
            try {
                $reflector = new \ReflectionClass($service);
                if ($reflector->hasMethod($methodName)) {
                    return $reflector->newInstance([
                        'exceptions'   => true,
                        'connection_timeout' => 120,
                        'keep_alive'   => true,
                        'cache_wsdl' => WSDL_CACHE_BOTH,
                        'trace' => $debug,
                        'stream_context' => $sc,

                    ]);
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