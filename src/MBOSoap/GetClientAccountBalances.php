<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientAccountBalances
{

    /**
     * @var GetClientAccountBalancesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientAccountBalancesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientAccountBalancesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientAccountBalancesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalances
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
