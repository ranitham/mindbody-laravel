<?php

namespace Nlocascio\Mindbody\MBOSoap;

class MembershipTypeRestriction extends MBObject
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
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\MembershipTypeRestriction
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
     * @return \Nlocascio\Mindbody\MBOSoap\MembershipTypeRestriction
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
