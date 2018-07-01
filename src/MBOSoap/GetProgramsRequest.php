<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProgramsRequest extends MBRequest
{

    /**
     * @var ScheduleType $ScheduleType
     */
    public $ScheduleType = null;

    /**
     * @var boolean $OnlineOnly
     */
    public $OnlineOnly = null;

    /**
     * @param ScheduleType $ScheduleType
     * @param boolean $OnlineOnly
     */
    public function __construct($ScheduleType, $OnlineOnly)
    {
      parent::__construct();
      $this->ScheduleType = $ScheduleType;
      $this->OnlineOnly = $OnlineOnly;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetProgramsRequest
     */
    public function setScheduleType($ScheduleType)
    {
      $this->ScheduleType = $ScheduleType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlineOnly()
    {
      return $this->OnlineOnly;
    }

    /**
     * @param boolean $OnlineOnly
     * @return \Nlocascio\Mindbody\MBOSoap\GetProgramsRequest
     */
    public function setOnlineOnly($OnlineOnly)
    {
      $this->OnlineOnly = $OnlineOnly;
      return $this;
    }

}
