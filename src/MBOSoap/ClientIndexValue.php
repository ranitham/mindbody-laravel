<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientIndexValue extends MBObject
{

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
     * @var boolean $Active
     */
    public $Active = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndexValue
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndexValue
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndexValue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndexValue
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
