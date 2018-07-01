<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RedeemSpaFinderWellnessCardRequest extends MBRequest
{

    /**
     * @var string $CardID
     */
    public $CardID = null;

    /**
     * @var float $FaceAmount
     */
    public $FaceAmount = null;

    /**
     * @var string $Currency
     */
    public $Currency = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @param float $FaceAmount
     */
    public function __construct($FaceAmount)
    {
      parent::__construct();
      $this->FaceAmount = $FaceAmount;
    }

    /**
     * @return string
     */
    public function getCardID()
    {
      return $this->CardID;
    }

    /**
     * @param string $CardID
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardRequest
     */
    public function setCardID($CardID)
    {
      $this->CardID = $CardID;
      return $this;
    }

    /**
     * @return float
     */
    public function getFaceAmount()
    {
      return $this->FaceAmount;
    }

    /**
     * @param float $FaceAmount
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardRequest
     */
    public function setFaceAmount($FaceAmount)
    {
      $this->FaceAmount = $FaceAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardRequest
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
