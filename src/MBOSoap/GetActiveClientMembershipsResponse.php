<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveClientMembershipsResponse
{

    /**
     * @var GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     */
    public $GetActiveClientMembershipsResult = null;

    /**
     * @param GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     */
    public function __construct($GetActiveClientMembershipsResult)
    {
      $this->GetActiveClientMembershipsResult = $GetActiveClientMembershipsResult;
    }

    /**
     * @return GetActiveClientMembershipsResult
     */
    public function getGetActiveClientMembershipsResult()
    {
      return $this->GetActiveClientMembershipsResult;
    }

    /**
     * @param GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveClientMembershipsResponse
     */
    public function setGetActiveClientMembershipsResult($GetActiveClientMembershipsResult)
    {
      $this->GetActiveClientMembershipsResult = $GetActiveClientMembershipsResult;
      return $this;
    }

}
