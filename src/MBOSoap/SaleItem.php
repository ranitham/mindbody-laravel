<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SaleItem extends MBObject
{

    /**
     * @var Sale $Sale
     */
    public $Sale = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var boolean $AccountPayment
     */
    public $AccountPayment = null;

    /**
     * @var float $Price
     */
    public $Price = null;

    /**
     * @var float $AmountPaid
     */
    public $AmountPaid = null;

    /**
     * @var float $Discount
     */
    public $Discount = null;

    /**
     * @var float $Tax
     */
    public $Tax = null;

    /**
     * @var boolean $Returned
     */
    public $Returned = null;

    /**
     * @var int $Quantity
     */
    public $Quantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Sale
     */
    public function getSale()
    {
      return $this->Sale;
    }

    /**
     * @param Sale $Sale
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setSale($Sale)
    {
      $this->Sale = $Sale;
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
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccountPayment()
    {
      return $this->AccountPayment;
    }

    /**
     * @param boolean $AccountPayment
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setAccountPayment($AccountPayment)
    {
      $this->AccountPayment = $AccountPayment;
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
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountPaid()
    {
      return $this->AmountPaid;
    }

    /**
     * @param float $AmountPaid
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param float $Tax
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturned()
    {
      return $this->Returned;
    }

    /**
     * @param boolean $Returned
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setReturned($Returned)
    {
      $this->Returned = $Returned;
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
     * @return \Nlocascio\Mindbody\MBOSoap\SaleItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
