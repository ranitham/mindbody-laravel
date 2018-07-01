<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffPermissionsResponse
{

    /**
     * @var GetStaffPermissionsResult $GetStaffPermissionsResult
     */
    public $GetStaffPermissionsResult = null;

    /**
     * @param GetStaffPermissionsResult $GetStaffPermissionsResult
     */
    public function __construct($GetStaffPermissionsResult)
    {
      $this->GetStaffPermissionsResult = $GetStaffPermissionsResult;
    }

    /**
     * @return GetStaffPermissionsResult
     */
    public function getGetStaffPermissionsResult()
    {
      return $this->GetStaffPermissionsResult;
    }

    /**
     * @param GetStaffPermissionsResult $GetStaffPermissionsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffPermissionsResponse
     */
    public function setGetStaffPermissionsResult($GetStaffPermissionsResult)
    {
      $this->GetStaffPermissionsResult = $GetStaffPermissionsResult;
      return $this;
    }

}
