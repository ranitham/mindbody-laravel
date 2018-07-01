<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetMobileProvidersResponse
{

    /**
     * @var GetMobileProvidersResult $GetMobileProvidersResult
     */
    public $GetMobileProvidersResult = null;

    /**
     * @param GetMobileProvidersResult $GetMobileProvidersResult
     */
    public function __construct($GetMobileProvidersResult)
    {
      $this->GetMobileProvidersResult = $GetMobileProvidersResult;
    }

    /**
     * @return GetMobileProvidersResult
     */
    public function getGetMobileProvidersResult()
    {
      return $this->GetMobileProvidersResult;
    }

    /**
     * @param GetMobileProvidersResult $GetMobileProvidersResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetMobileProvidersResponse
     */
    public function setGetMobileProvidersResult($GetMobileProvidersResult)
    {
      $this->GetMobileProvidersResult = $GetMobileProvidersResult;
      return $this;
    }

}
