<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassVisits
{

    /**
     * @var GetClassVisitsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClassVisitsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassVisitsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassVisitsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassVisits
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
