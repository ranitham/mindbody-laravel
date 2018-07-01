<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReserveResource
{

    /**
     * @var ReserveResourceRequest $Request
     */
    public $Request = null;

    /**
     * @param ReserveResourceRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ReserveResourceRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ReserveResourceRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResource
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
