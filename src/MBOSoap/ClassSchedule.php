<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClassSchedule extends MBObject
{

    /**
     * @var ArrayOfClass $Classes
     */
    public $Classes = null;

    /**
     * @var ArrayOfClient $Clients
     */
    public $Clients = null;

    /**
     * @var Course $Course
     */
    public $Course = null;

    /**
     * @var int $SemesterID
     */
    public $SemesterID = null;

    /**
     * @var boolean $IsAvailable
     */
    public $IsAvailable = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var ClassDescription $ClassDescription
     */
    public $ClassDescription = null;

    /**
     * @var boolean $DaySunday
     */
    public $DaySunday = null;

    /**
     * @var boolean $DayMonday
     */
    public $DayMonday = null;

    /**
     * @var boolean $DayTuesday
     */
    public $DayTuesday = null;

    /**
     * @var boolean $DayWednesday
     */
    public $DayWednesday = null;

    /**
     * @var boolean $DayThursday
     */
    public $DayThursday = null;

    /**
     * @var boolean $DayFriday
     */
    public $DayFriday = null;

    /**
     * @var boolean $DaySaturday
     */
    public $DaySaturday = null;

    /**
     * @var boolean $AllowOpenEnrollment
     */
    public $AllowOpenEnrollment = null;

    /**
     * @var boolean $AllowDateForwardEnrollment
     */
    public $AllowDateForwardEnrollment = null;

    /**
     * @var \Carbon\Carbon $StartTime
     */
    public $StartTime = null;

    /**
     * @var \Carbon\Carbon $EndTime
     */
    public $EndTime = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfClass
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfClass $Classes
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
      return $this;
    }

    /**
     * @return ArrayOfClient
     */
    public function getClients()
    {
      return $this->Clients;
    }

    /**
     * @param ArrayOfClient $Clients
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setClients($Clients)
    {
      $this->Clients = $Clients;
      return $this;
    }

    /**
     * @return Course
     */
    public function getCourse()
    {
      return $this->Course;
    }

    /**
     * @param Course $Course
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setCourse($Course)
    {
      $this->Course = $Course;
      return $this;
    }

    /**
     * @return int
     */
    public function getSemesterID()
    {
      return $this->SemesterID;
    }

    /**
     * @param int $SemesterID
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setSemesterID($SemesterID)
    {
      $this->SemesterID = $SemesterID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAvailable()
    {
      return $this->IsAvailable;
    }

    /**
     * @param boolean $IsAvailable
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setIsAvailable($IsAvailable)
    {
      $this->IsAvailable = $IsAvailable;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ClassDescription
     */
    public function getClassDescription()
    {
      return $this->ClassDescription;
    }

    /**
     * @param ClassDescription $ClassDescription
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setClassDescription($ClassDescription)
    {
      $this->ClassDescription = $ClassDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaySunday()
    {
      return $this->DaySunday;
    }

    /**
     * @param boolean $DaySunday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDaySunday($DaySunday)
    {
      $this->DaySunday = $DaySunday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDayMonday()
    {
      return $this->DayMonday;
    }

    /**
     * @param boolean $DayMonday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDayMonday($DayMonday)
    {
      $this->DayMonday = $DayMonday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDayTuesday()
    {
      return $this->DayTuesday;
    }

    /**
     * @param boolean $DayTuesday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDayTuesday($DayTuesday)
    {
      $this->DayTuesday = $DayTuesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDayWednesday()
    {
      return $this->DayWednesday;
    }

    /**
     * @param boolean $DayWednesday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDayWednesday($DayWednesday)
    {
      $this->DayWednesday = $DayWednesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDayThursday()
    {
      return $this->DayThursday;
    }

    /**
     * @param boolean $DayThursday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDayThursday($DayThursday)
    {
      $this->DayThursday = $DayThursday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDayFriday()
    {
      return $this->DayFriday;
    }

    /**
     * @param boolean $DayFriday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDayFriday($DayFriday)
    {
      $this->DayFriday = $DayFriday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaySaturday()
    {
      return $this->DaySaturday;
    }

    /**
     * @param boolean $DaySaturday
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setDaySaturday($DaySaturday)
    {
      $this->DaySaturday = $DaySaturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOpenEnrollment()
    {
      return $this->AllowOpenEnrollment;
    }

    /**
     * @param boolean $AllowOpenEnrollment
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setAllowOpenEnrollment($AllowOpenEnrollment)
    {
      $this->AllowOpenEnrollment = $AllowOpenEnrollment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDateForwardEnrollment()
    {
      return $this->AllowDateForwardEnrollment;
    }

    /**
     * @param boolean $AllowDateForwardEnrollment
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setAllowDateForwardEnrollment($AllowDateForwardEnrollment)
    {
      $this->AllowDateForwardEnrollment = $AllowDateForwardEnrollment;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setStartTime(\Carbon\Carbon $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setEndTime(\Carbon\Carbon $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
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
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassSchedule
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
