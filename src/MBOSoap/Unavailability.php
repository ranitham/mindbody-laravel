<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Unavailability extends ScheduleItem
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param int $ID
     * @param \Carbon\Carbon $StartDateTime
     * @param \Carbon\Carbon $EndDateTime
     */
    public function __construct($ID, \Carbon\Carbon $StartDateTime, \Carbon\Carbon $EndDateTime)
    {
      parent::__construct();
      $this->ID = $ID;
      $this->StartDateTime = $StartDateTime->format(\Carbon\Carbon::ATOM);
      $this->EndDateTime = $EndDateTime->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\Unavailability
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Unavailability
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
     * @return \Nlocascio\Mindbody\MBOSoap\Unavailability
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime)
    {
      $this->EndDateTime = $EndDateTime->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Nlocascio\Mindbody\MBOSoap\Unavailability
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
