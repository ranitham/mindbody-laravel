<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GenderOption
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
     * @var boolean $IsActive
     */
    public $IsActive = null;

    /**
     * @var boolean $IsSystem
     */
    public $IsSystem = null;

    /**
     * @param int $ID
     * @param boolean $IsActive
     * @param boolean $IsSystem
     */
    public function __construct($ID, $IsActive, $IsSystem)
    {
      $this->ID = $ID;
      $this->IsActive = $IsActive;
      $this->IsSystem = $IsSystem;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GenderOption
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
     * @return \Nlocascio\Mindbody\MBOSoap\GenderOption
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Nlocascio\Mindbody\MBOSoap\GenderOption
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSystem()
    {
      return $this->IsSystem;
    }

    /**
     * @param boolean $IsSystem
     * @return \Nlocascio\Mindbody\MBOSoap\GenderOption
     */
    public function setIsSystem($IsSystem)
    {
      $this->IsSystem = $IsSystem;
      return $this;
    }

}
