<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClasses
{

    /**
     * @var GetClassesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClassesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClasses
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
