<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CashInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount)
    {
      parent::__construct();
      $this->Amount = $Amount;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CashInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CashInfo
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

}
