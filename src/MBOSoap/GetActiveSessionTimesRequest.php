<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveSessionTimesRequest extends MBRequest
{

    /**
     * @var ScheduleType $ScheduleType
     */
    public $ScheduleType = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    public $SessionTypeIDs = null;

    /**
     * @var \Carbon\Carbon $StartTime
     */
    public $StartTime = null;

    /**
     * @var \Carbon\Carbon $EndTime
     */
    public $EndTime = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScheduleType
     */
    public function getScheduleType()
    {
      return $this->ScheduleType;
    }

    /**
     * @param ScheduleType $ScheduleType
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimesRequest
     */
    public function setScheduleType($ScheduleType)
    {
      $this->ScheduleType = $ScheduleType;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSessionTypeIDs()
    {
      return $this->SessionTypeIDs;
    }

    /**
     * @param ArrayOfInt $SessionTypeIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimesRequest
     */
    public function setStartTime(\Carbon\Carbon $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimesRequest
     */
    public function setEndTime(\Carbon\Carbon $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
