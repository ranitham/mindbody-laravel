<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContractsResponse
{

    /**
     * @var GetContractsResult $GetContractsResult
     */
    public $GetContractsResult = null;

    /**
     * @param GetContractsResult $GetContractsResult
     */
    public function __construct($GetContractsResult)
    {
      $this->GetContractsResult = $GetContractsResult;
    }

    /**
     * @return GetContractsResult
     */
    public function getGetContractsResult()
    {
      return $this->GetContractsResult;
    }

    /**
     * @param GetContractsResult $GetContractsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetContractsResponse
     */
    public function setGetContractsResult($GetContractsResult)
    {
      $this->GetContractsResult = $GetContractsResult;
      return $this;
    }

}
