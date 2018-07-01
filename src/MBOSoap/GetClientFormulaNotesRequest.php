<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientFormulaNotesRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $AppointmentID
     */
    public $AppointmentID = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientFormulaNotesRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientFormulaNotesRequest
     */
    public function setAppointmentID($AppointmentID)
    {
      $this->AppointmentID = $AppointmentID;
      return $this;
    }

}
