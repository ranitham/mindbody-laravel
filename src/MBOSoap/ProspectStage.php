<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ProspectStage
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var boolean $Active
     */
    public $Active = null;

    /**
     * @param boolean $Active
     */
    public function __construct($Active)
    {
      $this->Active = $Active;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ProspectStage
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ProspectStage
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ProspectStage
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
