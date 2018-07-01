<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientPurchases
{

    /**
     * @var GetClientPurchasesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientPurchasesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientPurchasesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientPurchasesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchases
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
