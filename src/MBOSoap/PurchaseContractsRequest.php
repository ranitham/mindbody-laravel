<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PurchaseContractsRequest extends MBRequest
{

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $ContractID
     */
    public $ContractID = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var string $FirstPaymentOccurs
     */
    public $FirstPaymentOccurs = null;

    /**
     * @var string $ClientSignature
     */
    public $ClientSignature = null;

    /**
     * @var string $PromotionCode
     */
    public $PromotionCode = null;

    /**
     * @var PaymentInfo $PaymentInfo
     */
    public $PaymentInfo = null;

    /**
     * @var boolean $SendNotifications
     */
    public $SendNotifications = null;

    /**
     * @var int $SalesRepId
     */
    public $SalesRepId = null;

    /**
     * @var boolean $ConsumerPresent
     */
    public $ConsumerPresent = null;

    /**
     * @var string $PaymentAuthenticationCallbackUrl
     */
    public $PaymentAuthenticationCallbackUrl = null;

    /**
     * @param int $LocationID
     * @param int $ContractID
     * @param boolean $SendNotifications
     * @param boolean $ConsumerPresent
     */
    public function __construct($LocationID, $ContractID, $SendNotifications, $ConsumerPresent)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
      $this->ContractID = $ContractID;
      $this->SendNotifications = $SendNotifications;
      $this->ConsumerPresent = $ConsumerPresent;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
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
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractID()
    {
      return $this->ContractID;
    }

    /**
     * @param int $ContractID
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setContractID($ContractID)
    {
      $this->ContractID = $ContractID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setStartDate(\Carbon\Carbon $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstPaymentOccurs()
    {
      return $this->FirstPaymentOccurs;
    }

    /**
     * @param string $FirstPaymentOccurs
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setFirstPaymentOccurs($FirstPaymentOccurs)
    {
      $this->FirstPaymentOccurs = $FirstPaymentOccurs;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientSignature()
    {
      return $this->ClientSignature;
    }

    /**
     * @param string $ClientSignature
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setClientSignature($ClientSignature)
    {
      $this->ClientSignature = $ClientSignature;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param string $PromotionCode
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendNotifications()
    {
      return $this->SendNotifications;
    }

    /**
     * @param boolean $SendNotifications
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setSendNotifications($SendNotifications)
    {
      $this->SendNotifications = $SendNotifications;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesRepId()
    {
      return $this->SalesRepId;
    }

    /**
     * @param int $SalesRepId
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setSalesRepId($SalesRepId)
    {
      $this->SalesRepId = $SalesRepId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConsumerPresent()
    {
      return $this->ConsumerPresent;
    }

    /**
     * @param boolean $ConsumerPresent
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setConsumerPresent($ConsumerPresent)
    {
      $this->ConsumerPresent = $ConsumerPresent;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthenticationCallbackUrl()
    {
      return $this->PaymentAuthenticationCallbackUrl;
    }

    /**
     * @param string $PaymentAuthenticationCallbackUrl
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsRequest
     */
    public function setPaymentAuthenticationCallbackUrl($PaymentAuthenticationCallbackUrl)
    {
      $this->PaymentAuthenticationCallbackUrl = $PaymentAuthenticationCallbackUrl;
      return $this;
    }

}
