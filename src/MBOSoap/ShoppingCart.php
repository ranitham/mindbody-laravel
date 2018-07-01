<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ShoppingCart extends MBObject
{

    /**
     * @var string $AuthCode
     */
    public $AuthCode = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var string $ID
     */
    public $ID = null;

    /**
     * @var ArrayOfCartItem $CartItems
     */
    public $CartItems = null;

    /**
     * @var float $SubTotal
     */
    public $SubTotal = null;

    /**
     * @var float $DiscountTotal
     */
    public $DiscountTotal = null;

    /**
     * @var float $TaxTotal
     */
    public $TaxTotal = null;

    /**
     * @var float $GrandTotal
     */
    public $GrandTotal = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setAuthCode($AuthCode)
    {
      $this->AuthCode = $AuthCode;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
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
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ArrayOfCartItem
     */
    public function getCartItems()
    {
      return $this->CartItems;
    }

    /**
     * @param ArrayOfCartItem $CartItems
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setCartItems($CartItems)
    {
      $this->CartItems = $CartItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
      return $this->SubTotal;
    }

    /**
     * @param float $SubTotal
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setSubTotal($SubTotal)
    {
      $this->SubTotal = $SubTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountTotal()
    {
      return $this->DiscountTotal;
    }

    /**
     * @param float $DiscountTotal
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setDiscountTotal($DiscountTotal)
    {
      $this->DiscountTotal = $DiscountTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxTotal()
    {
      return $this->TaxTotal;
    }

    /**
     * @param float $TaxTotal
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setTaxTotal($TaxTotal)
    {
      $this->TaxTotal = $TaxTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrandTotal()
    {
      return $this->GrandTotal;
    }

    /**
     * @param float $GrandTotal
     * @return \Nlocascio\Mindbody\MBOSoap\ShoppingCart
     */
    public function setGrandTotal($GrandTotal)
    {
      $this->GrandTotal = $GrandTotal;
      return $this;
    }

}
