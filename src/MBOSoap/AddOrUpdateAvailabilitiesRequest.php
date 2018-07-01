<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAvailabilitiesRequest extends MBRequest
{

    /**
     * @var string $UpdateAction
     */
    public $UpdateAction = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var ArrayOfInt $AvailabilityIDs
     */
    public $AvailabilityIDs = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var ArrayOfDayOfWeek $DaysOfWeek
     */
    public $DaysOfWeek = null;

    /**
     * @var string $UnavailableDescription
     */
    public $UnavailableDescription = null;

    /**
     * @var boolean $IsUnavailable
     */
    public $IsUnavailable = null;

    /**
     * @var AvailabilityDisplay $PublicDisplay
     */
    public $PublicDisplay = null;

    /**
     * @var string $Execute
     */
    public $Execute = null;

    /**
     * @param boolean $IsUnavailable
     */
    public function __construct($IsUnavailable)
    {
      parent::__construct();
      $this->IsUnavailable = $IsUnavailable;
    }

    /**
     * @return string
     */
    public function getUpdateAction()
    {
      return $this->UpdateAction;
    }

    /**
     * @param string $UpdateAction
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setUpdateAction($UpdateAction)
    {
      $this->UpdateAction = $UpdateAction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAvailabilityIDs()
    {
      return $this->AvailabilityIDs;
    }

    /**
     * @param ArrayOfInt $AvailabilityIDs
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setAvailabilityIDs($AvailabilityIDs)
    {
      $this->AvailabilityIDs = $AvailabilityIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
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
     * @return ArrayOfDayOfWeek
     */
    public function getDaysOfWeek()
    {
      return $this->DaysOfWeek;
    }

    /**
     * @param ArrayOfDayOfWeek $DaysOfWeek
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setDaysOfWeek($DaysOfWeek)
    {
      $this->DaysOfWeek = $DaysOfWeek;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnavailableDescription()
    {
      return $this->UnavailableDescription;
    }

    /**
     * @param string $UnavailableDescription
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setUnavailableDescription($UnavailableDescription)
    {
      $this->UnavailableDescription = $UnavailableDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnavailable()
    {
      return $this->IsUnavailable;
    }

    /**
     * @param boolean $IsUnavailable
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setIsUnavailable($IsUnavailable)
    {
      $this->IsUnavailable = $IsUnavailable;
      return $this;
    }

    /**
     * @return AvailabilityDisplay
     */
    public function getPublicDisplay()
    {
      return $this->PublicDisplay;
    }

    /**
     * @param AvailabilityDisplay $PublicDisplay
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setPublicDisplay($PublicDisplay)
    {
      $this->PublicDisplay = $PublicDisplay;
      return $this;
    }

    /**
     * @return string
     */
    public function getExecute()
    {
      return $this->Execute;
    }

    /**
     * @param string $Execute
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesRequest
     */
    public function setExecute($Execute)
    {
      $this->Execute = $Execute;
      return $this;
    }

}
