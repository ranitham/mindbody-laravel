<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetPackagesResponse
{

    /**
     * @var GetPackagesResult $GetPackagesResult
     */
    public $GetPackagesResult = null;

    /**
     * @param GetPackagesResult $GetPackagesResult
     */
    public function __construct($GetPackagesResult)
    {
      $this->GetPackagesResult = $GetPackagesResult;
    }

    /**
     * @return GetPackagesResult
     */
    public function getGetPackagesResult()
    {
      return $this->GetPackagesResult;
    }

    /**
     * @param GetPackagesResult $GetPackagesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetPackagesResponse
     */
    public function setGetPackagesResult($GetPackagesResult)
    {
      $this->GetPackagesResult = $GetPackagesResult;
      return $this;
    }

}
