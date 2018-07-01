<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;

trait ValidatesApiResponses
{
    /**
     * @param $response
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