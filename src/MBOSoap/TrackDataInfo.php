<?php

namespace Nlocascio\Mindbody\MBOSoap;

class TrackDataInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var string $TrackData
     */
    public $TrackData = null;

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
     * @return \Nlocascio\Mindbody\MBOSoap\TrackDataInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackData()
    {
      return $this->TrackData;
    }

    /**
     * @param string $TrackData
     * @return \Nlocascio\Mindbody\MBOSoap\TrackDataInfo
     */
    public function setTrackData($TrackData)
    {
      $this->TrackData = $TrackData;
      return $this;
    }

}
