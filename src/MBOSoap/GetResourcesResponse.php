<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResourcesResponse
{

    /**
     * @var GetResourcesResult $GetResourcesResult
     */
    public $GetResourcesResult = null;

    /**
     * @param GetResourcesResult $GetResourcesResult
     */
    public function __construct($GetResourcesResult)
    {
      $this->GetResourcesResult = $GetResourcesResult;
    }

    /**
     * @return GetResourcesResult
     */
    public function getGetResourcesResult()
    {
      return $this->GetResourcesResult;
    }

    /**
     * @param GetResourcesResult $GetResourcesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourcesResponse
     */
    public function setGetResourcesResult($GetResourcesResult)
    {
      $this->GetResourcesResult = $GetResourcesResult;
      return $this;
    }

}
