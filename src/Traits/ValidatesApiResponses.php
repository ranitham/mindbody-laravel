<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use Nlocascio\Mindbody\MBOSoap\MBResult;

trait ValidatesApiResponses
{
    /**
     * @param MBResult $response
     * @throws MindbodyErrorException
     */
    private function validateResponse($response)
    {
        if ($response->getErrorCode() != 200) {
            $ec = $response->getErrorCode();
            $msg = $response->getMessage();
            throw new MindbodyErrorException("API Error $ec: $msg", $ec);
        }
    }
}