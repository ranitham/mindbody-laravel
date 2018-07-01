<?php

namespace Nlocascio\Mindbody\MBOSoap;

class FormulaNote extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var string $Note
     */
    public $Note = null;

    /**
     * @var \Carbon\Carbon $EntryDateTime
     */
    public $EntryDateTime = null;

    /**
     * @var int $AppointmentID
     */
    public $AppointmentID = null;

    /**
     * @param \Carbon\Carbon $EntryDateTime
     */
    public function __construct(\Carbon\Carbon $EntryDateTime)
    {
      parent::__construct();
      $this->EntryDateTime = $EntryDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\FormulaNote
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\FormulaNote
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\FormulaNote
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEntryDateTime()
    {
      if ($this->EntryDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EntryDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EntryDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\FormulaNote
     */
    public function setEntryDateTime(\Carbon\Carbon $EntryDateTime)
    {
      $this->EntryDateTime = $EntryDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\FormulaNote
     */
    public function setAppointmentID($AppointmentID)
    {
      $this->AppointmentID = $AppointmentID;
      return $this;
    }

}
