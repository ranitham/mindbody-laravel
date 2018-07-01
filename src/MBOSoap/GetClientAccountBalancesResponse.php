<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientAccountBalancesResponse
{

    /**
     * @var GetClientAccountBalancesResult $GetClientAccountBalancesResult
     */
    public $GetClientAccountBalancesResult = null;

    /**
     * @param GetClientAccountBalancesResult $GetClientAccountBalancesResult
     */
    public function __construct($GetClientAccountBalancesResult)
    {
      $this->GetClientAccountBalancesResult = $GetClientAccountBalancesResult;
    }

    /**
     * @return GetClientAccountBalancesResult
     */
    public function getGetClientAccountBalancesResult()
    {
      return $this->GetClientAccountBalancesResult;
    }

    /**
     * @param GetClientAccountBalancesResult $GetClientAccountBalancesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalancesResponse
     */
    public function setGetClientAccountBalancesResult($GetClientAccountBalancesResult)
    {
      $this->GetClientAccountBalancesResult = $GetClientAccountBalancesResult;
      return $this;
    }

}
