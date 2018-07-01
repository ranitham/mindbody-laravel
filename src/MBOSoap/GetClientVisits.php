<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientVisits
{

    /**
     * @var GetClientVisitsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientVisitsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientVisitsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientVisitsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisits
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
