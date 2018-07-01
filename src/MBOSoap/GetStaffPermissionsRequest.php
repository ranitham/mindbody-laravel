<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffPermissionsRequest extends MBRequest
{

    /**
     * @var int $StaffID
     */
    public $StaffID = null;

    /**
     * @param int $StaffID
     */
    public function __construct($StaffID)
    {
      parent::__construct();
      $this->StaffID = $StaffID;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffPermissionsRequest
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

}
