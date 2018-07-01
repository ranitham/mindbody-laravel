<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAvailabilities
{

    /**
     * @var AddOrUpdateAvailabilitiesRequest $Request
     */
    public $Request = null;

    /**
     * @param AddOrUpdateAvailabilitiesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateAvailabilitiesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateAvailabilitiesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilities
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
