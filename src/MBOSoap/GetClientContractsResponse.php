<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContractsResponse
{

    /**
     * @var GetClientContractsResult $GetClientContractsResult
     */
    public $GetClientContractsResult = null;

    /**
     * @param GetClientContractsResult $GetClientContractsResult
     */
    public function __construct($GetClientContractsResult)
    {
      $this->GetClientContractsResult = $GetClientContractsResult;
    }

    /**
     * @return GetClientContractsResult
     */
    public function getGetClientContractsResult()
    {
      return $this->GetClientContractsResult;
    }

    /**
     * @param GetClientContractsResult $GetClientContractsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContractsResponse
     */
    public function setGetClientContractsResult($GetClientContractsResult)
    {
      $this->GetClientContractsResult = $GetClientContractsResult;
      return $this;
    }

}
