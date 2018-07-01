<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetServicesResponse
{

    /**
     * @var GetServicesResult $GetServicesResult
     */
    public $GetServicesResult = null;

    /**
     * @param GetServicesResult $GetServicesResult
     */
    public function __construct($GetServicesResult)
    {
      $this->GetServicesResult = $GetServicesResult;
    }

    /**
     * @return GetServicesResult
     */
    public function getGetServicesResult()
    {
      return $this->GetServicesResult;
    }

    /**
     * @param GetServicesResult $GetServicesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesResponse
     */
    public function setGetServicesResult($GetServicesResult)
    {
      $this->GetServicesResult = $GetServicesResult;
      return $this;
    }

}
