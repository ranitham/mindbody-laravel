<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContracts
{

    /**
     * @var GetClientContractsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientContractsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientContractsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientContractsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContracts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
