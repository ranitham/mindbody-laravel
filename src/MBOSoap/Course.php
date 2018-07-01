<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Course
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @var Staff $Organizer
     */
    public $Organizer = null;

    /**
     * @var Program $Program
     */
    public $Program = null;

    /**
     * @var string $ImageURL
     */
    public $ImageURL = null;

    /**
     * @param int $ID
     * @param \Carbon\Carbon $StartDate
     * @param \Carbon\Carbon $EndDate
     */
    public function __construct($ID, \Carbon\Carbon $StartDate, \Carbon\Carbon $EndDate)
    {
      $this->ID = $ID;
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setStartDate(\Carbon\Carbon $StartDate)
    {
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setEndDate(\Carbon\Carbon $EndDate)
    {
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getOrganizer()
    {
      return $this->Organizer;
    }

    /**
     * @param Staff $Organizer
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setOrganizer($Organizer)
    {
      $this->Organizer = $Organizer;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setProgram($Program)
    {
      $this->Program = $Program;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
      return $this->ImageURL;
    }

    /**
     * @param string $ImageURL
     * @return \Nlocascio\Mindbody\MBOSoap\Course
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
    }

}
