<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PurchaseContracts
{

    /**
     * @var PurchaseContractsRequest $Request
     */
    public $Request = null;

    /**
     * @param PurchaseContractsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return PurchaseContractsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param PurchaseContractsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContracts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
