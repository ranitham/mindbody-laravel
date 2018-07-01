<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientIndex extends MBObject
{

    /**
     * @var boolean $RequiredBusinessMode
     */
    public $RequiredBusinessMode = null;

    /**
     * @var boolean $RequiredConsumerMode
     */
    public $RequiredConsumerMode = null;

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
     * @var ArrayOfClientIndexValue $Values
     */
    public $Values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getRequiredBusinessMode()
    {
      return $this->RequiredBusinessMode;
    }

    /**
     * @param boolean $RequiredBusinessMode
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
     */
    public function setRequiredBusinessMode($RequiredBusinessMode)
    {
      $this->RequiredBusinessMode = $RequiredBusinessMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredConsumerMode()
    {
      return $this->RequiredConsumerMode;
    }

    /**
     * @param boolean $RequiredConsumerMode
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
     */
    public function setRequiredConsumerMode($RequiredConsumerMode)
    {
      $this->RequiredConsumerMode = $RequiredConsumerMode;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfClientIndexValue
     */
    public function getValues()
    {
      return $this->Values;
    }

    /**
     * @param ArrayOfClientIndexValue $Values
     * @return \Nlocascio\Mindbody\MBOSoap\ClientIndex
     */
    public function setValues($Values)
    {
      $this->Values = $Values;
      return $this;
    }

}
