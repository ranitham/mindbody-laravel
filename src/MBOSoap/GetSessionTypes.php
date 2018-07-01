<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSessionTypes
{

    /**
     * @var GetSessionTypesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetSessionTypesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSessionTypesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSessionTypesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetSessionTypes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
