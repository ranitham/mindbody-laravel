<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Package extends Item
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
     * @var float $DiscountPercentage
     */
    public $DiscountPercentage = null;

    /**
     * @var boolean $SellOnline
     */
    public $SellOnline = null;

    /**
     * @var ArrayOfService $Services
     */
    public $Services = null;

    /**
     * @var ArrayOfProduct $Products
     */
    public $Products = null;

    /**
     * @param int $ID
     * @param float $DiscountPercentage
     * @param boolean $SellOnline
     */
    public function __construct($ID, $DiscountPercentage, $SellOnline)
    {
      parent::__construct();
      $this->ID = $ID;
      $this->DiscountPercentage = $DiscountPercentage;
      $this->SellOnline = $SellOnline;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Package
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
     * @return \Nlocascio\Mindbody\MBOSoap\Package
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param float $DiscountPercentage
     * @return \Nlocascio\Mindbody\MBOSoap\Package
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellOnline()
    {
      return $this->SellOnline;
    }

    /**
     * @param boolean $SellOnline
     * @return \Nlocascio\Mindbody\MBOSoap\Package
     */
    public function setSellOnline($SellOnline)
    {
      $this->SellOnline = $SellOnline;
      return $this;
    }

    /**
     * @return ArrayOfService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfService $Services
     * @return \Nlocascio\Mindbody\MBOSoap\Package
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return \Nlocascio\Mindbody\MBOSoap\Package
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

}
