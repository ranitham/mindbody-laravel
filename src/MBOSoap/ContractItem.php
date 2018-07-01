<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ContractItem
{

    /**
     * @var string $ID
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
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var float $Price
     */
    public $Price = null;

    /**
     * @var int $Quantity
     */
    public $Quantity = null;

    /**
     * @var boolean $OneTimeItem
     */
    public $OneTimeItem = null;

    /**
     * @param float $Price
     * @param int $Quantity
     * @param boolean $OneTimeItem
     */
    public function __construct($Price, $Quantity, $OneTimeItem)
    {
      $this->Price = $Price;
      $this->Quantity = $Quantity;
      $this->OneTimeItem = $OneTimeItem;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOneTimeItem()
    {
      return $this->OneTimeItem;
    }

    /**
     * @param boolean $OneTimeItem
     * @return \Nlocascio\Mindbody\MBOSoap\ContractItem
     */
    public function setOneTimeItem($OneTimeItem)
    {
      $this->OneTimeItem = $OneTimeItem;
      return $this;
    }

}
