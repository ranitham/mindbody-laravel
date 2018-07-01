<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientCreditCard
{

    /**
     * @var string $CardType
     */
    public $CardType = null;

    /**
     * @var string $LastFour
     */
    public $LastFour = null;

    /**
     * @var string $CardNumber
     */
    public $CardNumber = null;

    /**
     * @var string $CardHolder
     */
    public $CardHolder = null;

    /**
     * @var string $ExpMonth
     */
    public $ExpMonth = null;

    /**
     * @var string $ExpYear
     */
    public $ExpYear = null;

    /**
     * @var string $Address
     */
    public $Address = null;

    /**
     * @var string $City
     */
    public $City = null;

    /**
     * @var string $State
     */
    public $State = null;

    /**
     * @var string $PostalCode
     */
    public $PostalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCardType()
    {
      return $this->CardType;
    }

    /**
     * @param string $CardType
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setCardType($CardType)
    {
      $this->CardType = $CardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastFour()
    {
      return $this->LastFour;
    }

    /**
     * @param string $LastFour
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setLastFour($LastFour)
    {
      $this->LastFour = $LastFour;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
      return $this->CardHolder;
    }

    /**
     * @param string $CardHolder
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setCardHolder($CardHolder)
    {
      $this->CardHolder = $CardHolder;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setExpYear($ExpYear)
    {
      $this->ExpYear = $ExpYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \Nlocascio\Mindbody\MBOSoap\ClientCreditCard
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

}
