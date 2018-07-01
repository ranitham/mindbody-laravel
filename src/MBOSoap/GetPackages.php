<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetPackages
{

    /**
     * @var GetPackagesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetPackagesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetPackagesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetPackagesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetPackages
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
