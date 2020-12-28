<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientPurchasesRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var int $SaleID
     */
    public $SaleID = null;

    /**
     * @var boolean $SortDescending
     */
    public $SortDescending = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesRequest
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
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesRequest
     */
    public function setEndDate(\Carbon\Carbon $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleID()
    {
      return $this->SaleID;
    }

    /**
     * @param int $SaleID
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesRequest
     */
    public function setSaleID($SaleID)
    {
      $this->SaleID = $SaleID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortDescending()
    {
      return $this->SortDescending;
    }

    /**
     * @param boolean $SortDescending
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesRequest
     */
    public function setSortDescending($SortDescending)
    {
      $this->SortDescending = $SortDescending;
      return $this;
    }

}
