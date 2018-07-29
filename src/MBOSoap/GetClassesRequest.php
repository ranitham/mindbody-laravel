<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ClassDescriptionIDs
     */
    public $ClassDescriptionIDs = null;

    /**
     * @var ArrayOfInt $ClassIDs
     */
    public $ClassIDs = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    public $SessionTypeIDs = null;

    /**
     * @var ArrayOfInt $LocationIDs
     */
    public $LocationIDs = null;

    /**
     * @var ArrayOfInt $SemesterIDs
     */
    public $SemesterIDs = null;

    /**
     * @var boolean $HideCanceledClasses
     */
    public $HideCanceledClasses = null;

    /**
     * @var boolean $SchedulingWindow
     */
    public $SchedulingWindow = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDate
     */
    public $LastModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassDescriptionIDs()
    {
      return $this->ClassDescriptionIDs;
    }

    /**
     * @param ArrayOfInt $ClassDescriptionIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setClassDescriptionIDs($ClassDescriptionIDs)
    {
      $this->ClassDescriptionIDs = $ClassDescriptionIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassIDs()
    {
      return $this->ClassIDs;
    }

    /**
     * @param ArrayOfInt $ClassIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setClassIDs($ClassIDs)
    {
      $this->ClassIDs = $ClassIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format("Y-m-d\TH:i:s");
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSemesterIDs()
    {
      return $this->SemesterIDs;
    }

    /**
     * @param ArrayOfInt $SemesterIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setSemesterIDs($SemesterIDs)
    {
      $this->SemesterIDs = $SemesterIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideCanceledClasses()
    {
      return $this->HideCanceledClasses;
    }

    /**
     * @param boolean $HideCanceledClasses
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setHideCanceledClasses($HideCanceledClasses)
    {
      $this->HideCanceledClasses = $HideCanceledClasses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSchedulingWindow()
    {
      return $this->SchedulingWindow;
    }

    /**
     * @param boolean $SchedulingWindow
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setSchedulingWindow($SchedulingWindow)
    {
      $this->SchedulingWindow = $SchedulingWindow;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastModifiedDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastModifiedDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesRequest
     */
    public function setLastModifiedDate(\Carbon\Carbon $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
