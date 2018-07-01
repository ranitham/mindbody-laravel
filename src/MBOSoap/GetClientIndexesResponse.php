<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientIndexesResponse
{

    /**
     * @var GetClientIndexesResult $GetClientIndexesResult
     */
    public $GetClientIndexesResult = null;

    /**
     * @param GetClientIndexesResult $GetClientIndexesResult
     */
    public function __construct($GetClientIndexesResult)
    {
      $this->GetClientIndexesResult = $GetClientIndexesResult;
    }

    /**
     * @return GetClientIndexesResult
     */
    public function getGetClientIndexesResult()
    {
      return $this->GetClientIndexesResult;
    }

    /**
     * @param GetClientIndexesResult $GetClientIndexesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientIndexesResponse
     */
    public function setGetClientIndexesResult($GetClientIndexesResult)
    {
      $this->GetClientIndexesResult = $GetClientIndexesResult;
      return $this;
    }

}
