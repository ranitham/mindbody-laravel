<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveClientMemberships
{

    /**
     * @var GetActiveClientMembershipsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetActiveClientMembershipsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetActiveClientMembershipsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetActiveClientMembershipsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveClientMemberships
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
