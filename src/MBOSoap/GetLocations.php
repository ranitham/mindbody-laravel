<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetLocations
{

    /**
     * @var GetLocationsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetLocationsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetLocationsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetLocationsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetLocations
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
