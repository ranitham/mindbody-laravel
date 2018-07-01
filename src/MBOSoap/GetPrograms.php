<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetPrograms
{

    /**
     * @var GetProgramsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetProgramsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetProgramsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetProgramsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetPrograms
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
