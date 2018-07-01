<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Product extends Item
{

    /**
     * @var float $Price
     */
    public $Price = null;

    /**
     * @var float $TaxIncluded
     */
    public $TaxIncluded = null;

    /**
     * @var float $TaxRate
     */
    public $TaxRate = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var string $ID
     */
    public $ID = null;

    /**
     * @var int $GroupID
     */
    public $GroupID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var float $OnlinePrice
     */
    public $OnlinePrice = null;

    /**
     * @var string $ShortDesc
     */
    public $ShortDesc = null;

    /**
     * @var string $LongDesc
     */
    public $LongDesc = null;

    /**
     * @var Color $Color
     */
    public $Color = null;

    /**
     * @var Size $Size
     */
    public $Size = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setTaxIncluded($TaxIncluded)
    {
      $this->TaxIncluded = $TaxIncluded;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
      return $this->GroupID;
    }

    /**
     * @param int $GroupID
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setGroupID($GroupID)
    {
      $this->GroupID = $GroupID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setOnlinePrice($OnlinePrice)
    {
      $this->OnlinePrice = $OnlinePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDesc()
    {
      return $this->ShortDesc;
    }

    /**
     * @param string $ShortDesc
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setShortDesc($ShortDesc)
    {
      $this->ShortDesc = $ShortDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDesc()
    {
      return $this->LongDesc;
    }

    /**
     * @param string $LongDesc
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setLongDesc($LongDesc)
    {
      $this->LongDesc = $LongDesc;
      return $this;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param Color $Color
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
      return $this;
    }

    /**
     * @return Size
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param Size $Size
     * @return \Nlocascio\Mindbody\MBOSoap\Product
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

}
