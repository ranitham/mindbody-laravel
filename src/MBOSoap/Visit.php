<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Visit extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    /**
     * @var int $AppointmentID
     */
    public $AppointmentID = null;

    /**
     * @var string $AppointmentGenderPreference
     */
    public $AppointmentGenderPreference = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var boolean $LateCancelled
     */
    public $LateCancelled = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var boolean $WebSignup
     */
    public $WebSignup = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var boolean $SignedIn
     */
    public $SignedIn = null;

    /**
     * @var string $AppointmentStatus
     */
    public $AppointmentStatus = null;

    /**
     * @var boolean $MakeUp
     */
    public $MakeUp = null;

    /**
     * @var ClientService $Service
     */
    public $Service = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDateTime
     */
    public $LastModifiedDateTime = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAppointmentID()
    {
      return $this->AppointmentID;
    }

    /**
     * @param int $AppointmentID
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setAppointmentID($AppointmentID)
    {
      $this->AppointmentID = $AppointmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentGenderPreference()
    {
      return $this->AppointmentGenderPreference;
    }

    /**
     * @param string $AppointmentGenderPreference
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setAppointmentGenderPreference($AppointmentGenderPreference)
    {
      $this->AppointmentGenderPreference = $AppointmentGenderPreference;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
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
     * @return boolean
     */
    public function getLateCancelled()
    {
      return $this->LateCancelled;
    }

    /**
     * @param boolean $LateCancelled
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setLateCancelled($LateCancelled)
    {
      $this->LateCancelled = $LateCancelled;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
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
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWebSignup()
    {
      return $this->WebSignup;
    }

    /**
     * @param boolean $WebSignup
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setWebSignup($WebSignup)
    {
      $this->WebSignup = $WebSignup;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignedIn()
    {
      return $this->SignedIn;
    }

    /**
     * @param boolean $SignedIn
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setSignedIn($SignedIn)
    {
      $this->SignedIn = $SignedIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentStatus()
    {
      return $this->AppointmentStatus;
    }

    /**
     * @param string $AppointmentStatus
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setAppointmentStatus($AppointmentStatus)
    {
      $this->AppointmentStatus = $AppointmentStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMakeUp()
    {
      return $this->MakeUp;
    }

    /**
     * @param boolean $MakeUp
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setMakeUp($MakeUp)
    {
      $this->MakeUp = $MakeUp;
      return $this;
    }

    /**
     * @return ClientService
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param ClientService $Service
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setService($Service)
    {
      $this->Service = $Service;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Visit
     */
    public function setLastModifiedDateTime(\Carbon\Carbon $LastModifiedDateTime = null)
    {
      if ($LastModifiedDateTime == null) {
       $this->LastModifiedDateTime = null;
      } else {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
