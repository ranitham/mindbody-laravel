<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetServices
{

    /**
     * @var GetServicesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetServicesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
