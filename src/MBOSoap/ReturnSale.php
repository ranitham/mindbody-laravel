<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReturnSale
{

    /**
     * @var ReturnSaleRequest $Request
     */
    public $Request = null;

    /**
     * @param ReturnSaleRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ReturnSaleRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ReturnSaleRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\ReturnSale
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
