<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetScheduleItemsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $LocationIDs
     */
    public $LocationIDs = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var boolean $IgnorePrepFinishTimes
     */
    public $IgnorePrepFinishTimes = null;

    /**
     * @param boolean $IgnorePrepFinishTimes
     */
    public function __construct($IgnorePrepFinishTimes)
    {
      parent::__construct();
      $this->IgnorePrepFinishTimes = $IgnorePrepFinishTimes;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationIDs()
    {
      return $this->LocationIDs;
    }

    /**
     * @param ArrayOfInt $LocationIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsRequest
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
     * @return boolean
     */
    public function getIgnorePrepFinishTimes()
    {
      return $this->IgnorePrepFinishTimes;
    }

    /**
     * @param boolean $IgnorePrepFinishTimes
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsRequest
     */
    public function setIgnorePrepFinishTimes($IgnorePrepFinishTimes)
    {
      $this->IgnorePrepFinishTimes = $IgnorePrepFinishTimes;
      return $this;
    }

}
