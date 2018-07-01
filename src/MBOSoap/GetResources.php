<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResources
{

    /**
     * @var GetResourcesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetResourcesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetResourcesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetResourcesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetResources
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
