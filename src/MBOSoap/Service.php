<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Service extends Item
{

    /**
     * @var float $Price
     */
    public $Price = null;

    /**
     * @var float $OnlinePrice
     */
    public $OnlinePrice = null;

    /**
     * @var float $TaxIncluded
     */
    public $TaxIncluded = null;

    /**
     * @var int $ProgramID
     */
    public $ProgramID = null;

    /**
     * @var float $TaxRate
     */
    public $TaxRate = null;

    /**
     * @var float $ProductID
     */
    public $ProductID = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var string $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var int $Count
     */
    public $Count = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnlinePrice()
    {
      return $this->OnlinePrice;
    }

    /**
     * @param float $OnlinePrice
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setOnlinePrice($OnlinePrice)
    {
      $this->OnlinePrice = $OnlinePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncluded()
    {
      return $this->TaxIncluded;
    }

    /**
     * @param float $TaxIncluded
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setTaxIncluded($TaxIncluded)
    {
      $this->TaxIncluded = $TaxIncluded;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgramID()
    {
      return $this->ProgramID;
    }

    /**
     * @param int $ProgramID
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setProgramID($ProgramID)
    {
      $this->ProgramID = $ProgramID;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param float $ProductID
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Service
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
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \Nlocascio\Mindbody\MBOSoap\Service
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
