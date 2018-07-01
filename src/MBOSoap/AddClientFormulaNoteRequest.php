<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientFormulaNoteRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $AppointmentID
     */
    public $AppointmentID = null;

    /**
     * @var string $Note
     */
    public $Note = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNoteRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNoteRequest
     */
    public function setAppointmentID($AppointmentID)
    {
      $this->AppointmentID = $AppointmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNoteRequest
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

}
