<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReserveResourceResponse
{

    /**
     * @var ReserveResourceResult $ReserveResourceResult
     */
    public $ReserveResourceResult = null;

    /**
     * @param ReserveResourceResult $ReserveResourceResult
     */
    public function __construct($ReserveResourceResult)
    {
      $this->ReserveResourceResult = $ReserveResourceResult;
    }

    /**
     * @return ReserveResourceResult
     */
    public function getReserveResourceResult()
    {
      return $this->ReserveResourceResult;
    }

    /**
     * @param ReserveResourceResult $ReserveResourceResult
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceResponse
     */
    public function setReserveResourceResult($ReserveResourceResult)
    {
      $this->ReserveResourceResult = $ReserveResourceResult;
      return $this;
    }

}
