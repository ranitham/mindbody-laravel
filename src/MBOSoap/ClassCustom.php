<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClassCustom extends MBObject
{

    /**
     * @var int $ClassScheduleID
     */
    public $ClassScheduleID = null;

    /**
     * @var ArrayOfVisit $Visits
     */
    public $Visits = null;

    /**
     * @var ArrayOfClient $Clients
     */
    public $Clients = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @var Resource $Resource
     */
    public $Resource = null;

    /**
     * @var int $MaxCapacity
     */
    public $MaxCapacity = null;

    /**
     * @var int $WebCapacity
     */
    public $WebCapacity = null;

    /**
     * @var int $TotalBooked
     */
    public $TotalBooked = null;

    /**
     * @var int $TotalBookedWaitlist
     */
    public $TotalBookedWaitlist = null;

    /**
     * @var int $WebBooked
     */
    public $WebBooked = null;

    /**
     * @var int $SemesterID
     */
    public $SemesterID = null;

    /**
     * @var boolean $IsCanceled
     */
    public $IsCanceled = null;

    /**
     * @var boolean $Substitute
     */
    public $Substitute = null;

    /**
     * @var boolean $Active
     */
    public $Active = null;

    /**
     * @var boolean $IsWaitlistAvailable
     */
    public $IsWaitlistAvailable = null;

    /**
     * @var boolean $IsEnrolled
     */
    public $IsEnrolled = null;

    /**
     * @var boolean $HideCancel
     */
    public $HideCancel = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var boolean $IsAvailable
     */
    public $IsAvailable = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDateTime
     */
    public $LastModifiedDateTime = null;

    /**
     * @var ClassDescription $ClassDescription
     */
    public $ClassDescription = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getClassScheduleID()
    {
      return $this->ClassScheduleID;
    }

    /**
     * @param int $ClassScheduleID
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setClassScheduleID($ClassScheduleID)
    {
      $this->ClassScheduleID = $ClassScheduleID;
      return $this;
    }

    /**
     * @return ArrayOfVisit
     */
    public function getVisits()
    {
      return $this->Visits;
    }

    /**
     * @param ArrayOfVisit $Visits
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setVisits($Visits)
    {
      $this->Visits = $Visits;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setClients($Clients)
    {
      $this->Clients = $Clients;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return Resource
     */
    public function getResource()
    {
      return $this->Resource;
    }

    /**
     * @param Resource $Resource
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setResource($Resource)
    {
      $this->Resource = $Resource;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCapacity()
    {
      return $this->MaxCapacity;
    }

    /**
     * @param int $MaxCapacity
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setMaxCapacity($MaxCapacity)
    {
      $this->MaxCapacity = $MaxCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebCapacity()
    {
      return $this->WebCapacity;
    }

    /**
     * @param int $WebCapacity
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setWebCapacity($WebCapacity)
    {
      $this->WebCapacity = $WebCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalBooked()
    {
      return $this->TotalBooked;
    }

    /**
     * @param int $TotalBooked
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setTotalBooked($TotalBooked)
    {
      $this->TotalBooked = $TotalBooked;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalBookedWaitlist()
    {
      return $this->TotalBookedWaitlist;
    }

    /**
     * @param int $TotalBookedWaitlist
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setTotalBookedWaitlist($TotalBookedWaitlist)
    {
      $this->TotalBookedWaitlist = $TotalBookedWaitlist;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebBooked()
    {
      return $this->WebBooked;
    }

    /**
     * @param int $WebBooked
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setWebBooked($WebBooked)
    {
      $this->WebBooked = $WebBooked;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setSemesterID($SemesterID)
    {
      $this->SemesterID = $SemesterID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCanceled()
    {
      return $this->IsCanceled;
    }

    /**
     * @param boolean $IsCanceled
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setIsCanceled($IsCanceled)
    {
      $this->IsCanceled = $IsCanceled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubstitute()
    {
      return $this->Substitute;
    }

    /**
     * @param boolean $Substitute
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setSubstitute($Substitute)
    {
      $this->Substitute = $Substitute;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWaitlistAvailable()
    {
      return $this->IsWaitlistAvailable;
    }

    /**
     * @param boolean $IsWaitlistAvailable
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setIsWaitlistAvailable($IsWaitlistAvailable)
    {
      $this->IsWaitlistAvailable = $IsWaitlistAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEnrolled()
    {
      return $this->IsEnrolled;
    }

    /**
     * @param boolean $IsEnrolled
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setIsEnrolled($IsEnrolled)
    {
      $this->IsEnrolled = $IsEnrolled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideCancel()
    {
      return $this->HideCancel;
    }

    /**
     * @param boolean $HideCancel
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setHideCancel($HideCancel)
    {
      $this->HideCancel = $HideCancel;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setIsAvailable($IsAvailable)
    {
      $this->IsAvailable = $IsAvailable;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastModifiedDateTime()
    {
      if ($this->LastModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastModifiedDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastModifiedDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setLastModifiedDateTime(\Carbon\Carbon $LastModifiedDateTime = null)
    {
      if ($LastModifiedDateTime == null) {
       $this->LastModifiedDateTime = null;
      } else {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setClassDescription($ClassDescription)
    {
      $this->ClassDescription = $ClassDescription;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassCustom
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

}
