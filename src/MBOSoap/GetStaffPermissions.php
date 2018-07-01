<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffPermissions
{

    /**
     * @var GetStaffPermissionsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetStaffPermissionsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffPermissionsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffPermissionsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffPermissions
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
