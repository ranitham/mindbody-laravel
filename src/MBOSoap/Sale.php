<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Sale
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var \Carbon\Carbon $SaleTime
     */
    public $SaleTime = null;

    /**
     * @var \Carbon\Carbon $SaleDate
     */
    public $SaleDate = null;

    /**
     * @var \Carbon\Carbon $SaleDateTime
     */
    public $SaleDateTime = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var ArrayOfPurchasedItem $PurchasedItems
     */
    public $PurchasedItems = null;

    /**
     * @var Location $Location
     */
    public $Location = null;

    /**
     * @var ArrayOfPayment $Payments
     */
    public $Payments = null;

    /**
     * @param int $ID
     * @param \Carbon\Carbon $SaleTime
     * @param \Carbon\Carbon $SaleDate
     * @param \Carbon\Carbon $SaleDateTime
     */
    public function __construct($ID, \Carbon\Carbon $SaleTime, \Carbon\Carbon $SaleDate, \Carbon\Carbon $SaleDateTime)
    {
      $this->ID = $ID;
      $this->SaleTime = $SaleTime->format("Y-m-d\TH:i:s");
      $this->SaleDate = $SaleDate->format("Y-m-d\TH:i:s");
      $this->SaleDateTime = $SaleDateTime->format("Y-m-d\TH:i:s");
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
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getSaleTime()
    {
      if ($this->SaleTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->SaleTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $SaleTime
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setSaleTime(\Carbon\Carbon $SaleTime)
    {
      $this->SaleTime = $SaleTime->format("Y-m-d\TH:i:s");
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getSaleDate()
    {
      if ($this->SaleDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->SaleDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $SaleDate
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setSaleDate(\Carbon\Carbon $SaleDate)
    {
      $this->SaleDate = $SaleDate->format("Y-m-d\TH:i:s");
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getSaleDateTime()
    {
      if ($this->SaleDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->SaleDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $SaleDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setSaleDateTime(\Carbon\Carbon $SaleDateTime)
    {
      $this->SaleDateTime = $SaleDateTime->format("Y-m-d\TH:i:s");
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
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return ArrayOfPurchasedItem
     */
    public function getPurchasedItems()
    {
      return $this->PurchasedItems;
    }

    /**
     * @param ArrayOfPurchasedItem $PurchasedItems
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setPurchasedItems($PurchasedItems)
    {
      $this->PurchasedItems = $PurchasedItems;
      return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Location $Location
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return ArrayOfPayment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfPayment $Payments
     * @return \Nlocascio\Mindbody\MBOSoap\Sale
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

}
