<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CustomClientField
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $DataType
     */
    public $DataType = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
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
     * @return \Nlocascio\Mindbody\MBOSoap\CustomClientField
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param string $DataType
     * @return \Nlocascio\Mindbody\MBOSoap\CustomClientField
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CustomClientField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Nlocascio\Mindbody\MBOSoap\CustomClientField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
