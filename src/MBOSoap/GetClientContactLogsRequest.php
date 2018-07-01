<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContactLogsRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var boolean $ShowSystemGenerated
     */
    public $ShowSystemGenerated = null;

    /**
     * @var ArrayOfInt $TypeIDs
     */
    public $TypeIDs = null;

    /**
     * @var ArrayOfInt $SubtypeIDs
     */
    public $SubtypeIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setStartDate(\Carbon\Carbon $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setEndDate(\Carbon\Carbon $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getStaffIDs()
    {
      return $this->StaffIDs;
    }

    /**
     * @param ArrayOfLong $StaffIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSystemGenerated()
    {
      return $this->ShowSystemGenerated;
    }

    /**
     * @param boolean $ShowSystemGenerated
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setShowSystemGenerated($ShowSystemGenerated)
    {
      $this->ShowSystemGenerated = $ShowSystemGenerated;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getTypeIDs()
    {
      return $this->TypeIDs;
    }

    /**
     * @param ArrayOfInt $TypeIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setTypeIDs($TypeIDs)
    {
      $this->TypeIDs = $TypeIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSubtypeIDs()
    {
      return $this->SubtypeIDs;
    }

    /**
     * @param ArrayOfInt $SubtypeIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsRequest
     */
    public function setSubtypeIDs($SubtypeIDs)
    {
      $this->SubtypeIDs = $SubtypeIDs;
      return $this;
    }

}
