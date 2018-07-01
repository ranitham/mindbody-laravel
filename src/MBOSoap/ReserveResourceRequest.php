<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReserveResourceRequest extends MBRequest
{

    /**
     * @var int $ResourceID
     */
    public $ResourceID = null;

    /**
     * @var int $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $StaffID
     */
    public $StaffID = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var int $ProgramID
     */
    public $ProgramID = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @param int $ResourceID
     * @param int $ClientID
     * @param int $StaffID
     * @param \Carbon\Carbon $StartDateTime
     * @param \Carbon\Carbon $EndDateTime
     * @param int $LocationID
     * @param int $ProgramID
     */
    public function __construct($ResourceID, $ClientID, $StaffID, \Carbon\Carbon $StartDateTime, \Carbon\Carbon $EndDateTime, $LocationID, $ProgramID)
    {
      parent::__construct();
      $this->ResourceID = $ResourceID;
      $this->ClientID = $ClientID;
      $this->StaffID = $StaffID;
      $this->StartDateTime = $StartDateTime->format(\Carbon\Carbon::ATOM);
      $this->EndDateTime = $EndDateTime->format(\Carbon\Carbon::ATOM);
      $this->LocationID = $LocationID;
      $this->ProgramID = $ProgramID;
    }

    /**
     * @return int
     */
    public function getResourceID()
    {
      return $this->ResourceID;
    }

    /**
     * @param int $ResourceID
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setResourceID($ResourceID)
    {
      $this->ResourceID = $ResourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime)
    {
      $this->StartDateTime = $StartDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime)
    {
      $this->EndDateTime = $EndDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgramID()
    {
      return $this->ProgramID;
    }

    /**
     * @param int $ProgramID
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setProgramID($ProgramID)
    {
      $this->ProgramID = $ProgramID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ReserveResourceRequest
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

}
