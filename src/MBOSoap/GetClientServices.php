<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientServices
{

    /**
     * @var GetClientServicesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientServicesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
