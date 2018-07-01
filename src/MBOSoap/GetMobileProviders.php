<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetMobileProviders
{

    /**
     * @var GetMobileProvidersRequest $Request
     */
    public $Request = null;

    /**
     * @param GetMobileProvidersRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetMobileProvidersRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetMobileProvidersRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetMobileProviders
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
