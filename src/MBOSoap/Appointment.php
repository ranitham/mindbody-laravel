<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Appointment extends ScheduleItem
{

    /**
     * @var string $GenderPreference
     */
    public $GenderPreference = null;

    /**
     * @var int $Duration
     */
    public $Duration = null;

    /**
     * @var string $ProviderID
     */
    public $ProviderID = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var AppointmentStatus $Status
     */
    public $Status = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @var boolean $StaffRequested
     */
    public $StaffRequested = null;

    /**
     * @var Program $Program
     */
    public $Program = null;

    /**
     * @var SessionType $SessionType
     */
    public $SessionType = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var boolean $FirstAppointment
     */
    public $FirstAppointment = null;

    /**
     * @var ClientService $ClientService
     */
    public $ClientService = null;

    /**
     * @var ArrayOfResource $Resources
     */
    public $Resources = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getGenderPreference()
    {
      return $this->GenderPreference;
    }

    /**
     * @param string $GenderPreference
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setGenderPreference($GenderPreference)
    {
      $this->GenderPreference = $GenderPreference;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderID()
    {
      return $this->ProviderID;
    }

    /**
     * @param string $ProviderID
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setProviderID($ProviderID)
    {
      $this->ProviderID = $ProviderID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return AppointmentStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AppointmentStatus $Status
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
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
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStaffRequested()
    {
      return $this->StaffRequested;
    }

    /**
     * @param boolean $StaffRequested
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setStaffRequested($StaffRequested)
    {
      $this->StaffRequested = $StaffRequested;
      return $this;
    }

    /**
     * @return Program
     */
    public function getProgram()
    {
      return $this->Program;
    }

    /**
     * @param Program $Program
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setProgram($Program)
    {
      $this->Program = $Program;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setSessionType($SessionType)
    {
      $this->SessionType = $SessionType;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirstAppointment()
    {
      return $this->FirstAppointment;
    }

    /**
     * @param boolean $FirstAppointment
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setFirstAppointment($FirstAppointment)
    {
      $this->FirstAppointment = $FirstAppointment;
      return $this;
    }

    /**
     * @return ClientService
     */
    public function getClientService()
    {
      return $this->ClientService;
    }

    /**
     * @param ClientService $ClientService
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setClientService($ClientService)
    {
      $this->ClientService = $ClientService;
      return $this;
    }

    /**
     * @return ArrayOfResource
     */
    public function getResources()
    {
      return $this->Resources;
    }

    /**
     * @param ArrayOfResource $Resources
     * @return \Nlocascio\Mindbody\MBOSoap\Appointment
     */
    public function setResources($Resources)
    {
      $this->Resources = $Resources;
      return $this;
    }

}
