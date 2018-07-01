<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientServicesResponse
{

    /**
     * @var GetClientServicesResult $GetClientServicesResult
     */
    public $GetClientServicesResult = null;

    /**
     * @param GetClientServicesResult $GetClientServicesResult
     */
    public function __construct($GetClientServicesResult)
    {
      $this->GetClientServicesResult = $GetClientServicesResult;
    }

    /**
     * @return GetClientServicesResult
     */
    public function getGetClientServicesResult()
    {
      return $this->GetClientServicesResult;
    }

    /**
     * @param GetClientServicesResult $GetClientServicesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientServicesResponse
     */
    public function setGetClientServicesResult($GetClientServicesResult)
    {
      $this->GetClientServicesResult = $GetClientServicesResult;
      return $this;
    }

}
