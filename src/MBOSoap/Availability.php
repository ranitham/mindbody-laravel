<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Availability extends ScheduleItem
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    /**
     * @var SessionType $SessionType
     */
    public $SessionType = null;

    /**
     * @var ArrayOfProgram $Programs
     */
    public $Programs = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var \Carbon\Carbon $BookableEndDateTime
     */
    public $BookableEndDateTime = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @param int $ID
     * @param \Carbon\Carbon $StartDateTime
     * @param \Carbon\Carbon $EndDateTime
     */
    public function __construct($ID, \Carbon\Carbon $StartDateTime, \Carbon\Carbon $EndDateTime)
    {
      parent::__construct();
      $this->ID = $ID;
      $this->StartDateTime = $StartDateTime->format("Y-m-d\TH:i:s");
      $this->EndDateTime = $EndDateTime->format("Y-m-d\TH:i:s");
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

    /**
     * @return SessionType
     */
    public function getSessionType()
    {
      return $this->SessionType;
    }

    /**
     * @param SessionType $SessionType
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setSessionType($SessionType)
    {
      $this->SessionType = $SessionType;
      return $this;
    }

    /**
     * @return ArrayOfProgram
     */
    public function getPrograms()
    {
      return $this->Programs;
    }

    /**
     * @param ArrayOfProgram $Programs
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setPrograms($Programs)
    {
      $this->Programs = $Programs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime)
    {
      $this->StartDateTime = $StartDateTime->format("Y-m-d\TH:i:s");
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime)
    {
      $this->EndDateTime = $EndDateTime->format("Y-m-d\TH:i:s");
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getBookableEndDateTime()
    {
      if ($this->BookableEndDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->BookableEndDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $BookableEndDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setBookableEndDateTime(\Carbon\Carbon $BookableEndDateTime = null)
    {
      if ($BookableEndDateTime == null) {
       $this->BookableEndDateTime = null;
      } else {
        $this->BookableEndDateTime = $BookableEndDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Location $Location
     * @return \Nlocascio\Mindbody\MBOSoap\Availability
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
