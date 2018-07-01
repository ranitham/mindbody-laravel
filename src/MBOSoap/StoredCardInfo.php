<?php

namespace Nlocascio\Mindbody\MBOSoap;

class StoredCardInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var string $LastFour
     */
    public $LastFour = null;

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
     * @return \Nlocascio\Mindbody\MBOSoap\StoredCardInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Nlocascio\Mindbody\MBOSoap\StoredCardInfo
     */
    public function setLastFour($LastFour)
    {
      $this->LastFour = $LastFour;
      return $this;
    }

}
