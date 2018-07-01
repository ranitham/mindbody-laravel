<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ContactLogType extends MBObject
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
     * @var ArrayOfContactLogSubtype $Subtypes
     */
    public $Subtypes = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogType
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfContactLogSubtype
     */
    public function getSubtypes()
    {
      return $this->Subtypes;
    }

    /**
     * @param ArrayOfContactLogSubtype $Subtypes
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogType
     */
    public function setSubtypes($Subtypes)
    {
      $this->Subtypes = $Subtypes;
      return $this;
    }

}
