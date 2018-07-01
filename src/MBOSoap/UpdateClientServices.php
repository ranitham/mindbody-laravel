<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientServices
{

    /**
     * @var UpdateClientServicesRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateClientServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateClientServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateClientServicesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
