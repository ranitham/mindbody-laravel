<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAvailabilitiesResult extends MBResult
{

    /**
     * @var ArrayOfStaff $StaffMembers
     */
    public $StaffMembers = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfStaff
     */
    public function getStaffMembers()
    {
      return $this->StaffMembers;
    }

    /**
     * @param ArrayOfStaff $StaffMembers
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesResult
     */
    public function setStaffMembers($StaffMembers)
    {
      $this->StaffMembers = $StaffMembers;
      return $this;
    }

}
