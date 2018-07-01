<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClassDescription extends MBObject
{

    /**
     * @var string $ImageURL
     */
    public $ImageURL = null;

    /**
     * @var Level $Level
     */
    public $Level = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

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
     * @var string $Prereq
     */
    public $Prereq = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @var \Carbon\Carbon $LastUpdated
     */
    public $LastUpdated = null;

    /**
     * @var Program $Program
     */
    public $Program = null;

    /**
     * @var SessionType $SessionType
     */
    public $SessionType = null;

    /**
     * @var boolean $Active
     */
    public $Active = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
    }

    /**
     * @return Level
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param Level $Level
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrereq()
    {
      return $this->Prereq;
    }

    /**
     * @param string $Prereq
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setPrereq($Prereq)
    {
      $this->Prereq = $Prereq;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastUpdated()
    {
      if ($this->LastUpdated == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastUpdated);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastUpdated
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setLastUpdated(\Carbon\Carbon $LastUpdated = null)
    {
      if ($LastUpdated == null) {
       $this->LastUpdated = null;
      } else {
        $this->LastUpdated = $LastUpdated->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setSessionType($SessionType)
    {
      $this->SessionType = $SessionType;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClassDescription
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
