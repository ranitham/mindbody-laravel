<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContracts
{

    /**
     * @var GetContractsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetContractsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetContractsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetContractsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetContracts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
