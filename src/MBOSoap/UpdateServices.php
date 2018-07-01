<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateServices
{

    /**
     * @var UpdateServicesRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateServicesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
