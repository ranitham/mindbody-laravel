<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Payment
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var int $Method
     */
    public $Method = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $LastFour
     */
    public $LastFour = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @param int $ID
     * @param float $Amount
     * @param int $Method
     */
    public function __construct($ID, $Amount, $Method)
    {
      $this->ID = $ID;
      $this->Amount = $Amount;
      $this->Method = $Method;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMethod()
    {
      return $this->Method;
    }

    /**
     * @param int $Method
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setMethod($Method)
    {
      $this->Method = $Method;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setLastFour($LastFour)
    {
      $this->LastFour = $LastFour;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Nlocascio\Mindbody\MBOSoap\Payment
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

}
