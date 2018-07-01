<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CreditCardInfo extends PaymentInfo
{

    /**
     * @var string $CVV
     */
    public $CVV = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var string $CreditCardNumber
     */
    public $CreditCardNumber = null;

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var string $ExpMonth
     */
    public $ExpMonth = null;

    /**
     * @var string $ExpYear
     */
    public $ExpYear = null;

    /**
     * @var string $BillingName
     */
    public $BillingName = null;

    /**
     * @var string $BillingAddress
     */
    public $BillingAddress = null;

    /**
     * @var string $BillingCity
     */
    public $BillingCity = null;

    /**
     * @var string $BillingState
     */
    public $BillingState = null;

    /**
     * @var string $BillingPostalCode
     */
    public $BillingPostalCode = null;

    /**
     * @var boolean $SaveInfo
     */
    public $SaveInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCVV()
    {
      return $this->CVV;
    }

    /**
     * @param string $CVV
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setCVV($CVV)
    {
      $this->CVV = $CVV;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
      return $this->CreditCardNumber;
    }

    /**
     * @param string $CreditCardNumber
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setCreditCardNumber($CreditCardNumber)
    {
      $this->CreditCardNumber = $CreditCardNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpMonth()
    {
      return $this->ExpMonth;
    }

    /**
     * @param string $ExpMonth
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setExpMonth($ExpMonth)
    {
      $this->ExpMonth = $ExpMonth;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpYear()
    {
      return $this->ExpYear;
    }

    /**
     * @param string $ExpYear
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setExpYear($ExpYear)
    {
      $this->ExpYear = $ExpYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
      return $this->BillingName;
    }

    /**
     * @param string $BillingName
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setBillingName($BillingName)
    {
      $this->BillingName = $BillingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress()
    {
      return $this->BillingAddress;
    }

    /**
     * @param string $BillingAddress
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setBillingAddress($BillingAddress)
    {
      $this->BillingAddress = $BillingAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
      return $this->BillingCity;
    }

    /**
     * @param string $BillingCity
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setBillingCity($BillingCity)
    {
      $this->BillingCity = $BillingCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
      return $this->BillingState;
    }

    /**
     * @param string $BillingState
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setBillingState($BillingState)
    {
      $this->BillingState = $BillingState;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPostalCode()
    {
      return $this->BillingPostalCode;
    }

    /**
     * @param string $BillingPostalCode
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setBillingPostalCode($BillingPostalCode)
    {
      $this->BillingPostalCode = $BillingPostalCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveInfo()
    {
      return $this->SaveInfo;
    }

    /**
     * @param boolean $SaveInfo
     * @return \Nlocascio\Mindbody\MBOSoap\CreditCardInfo
     */
    public function setSaveInfo($SaveInfo)
    {
      $this->SaveInfo = $SaveInfo;
      return $this;
    }

}
