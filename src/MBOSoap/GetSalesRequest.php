<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesRequest extends MBRequest
{

    /**
     * @var int $SaleID
     */
    public $SaleID = null;

    /**
     * @var \Carbon\Carbon $StartSaleDateTime
     */
    public $StartSaleDateTime = null;

    /**
     * @var \Carbon\Carbon $EndSaleDateTime
     */
    public $EndSaleDateTime = null;

    /**
     * @var int $PaymentMethodID
     */
    public $PaymentMethodID = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRequest
     */
    public function setSaleID($SaleID)
    {
      $this->SaleID = $SaleID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartSaleDateTime()
    {
      if ($this->StartSaleDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartSaleDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartSaleDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRequest
     */
    public function setStartSaleDateTime(\Carbon\Carbon $StartSaleDateTime = null)
    {
      if ($StartSaleDateTime == null) {
       $this->StartSaleDateTime = null;
      } else {
        $this->StartSaleDateTime = $StartSaleDateTime->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndSaleDateTime()
    {
      if ($this->EndSaleDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndSaleDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndSaleDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRequest
     */
    public function setEndSaleDateTime(\Carbon\Carbon $EndSaleDateTime = null)
    {
      if ($EndSaleDateTime == null) {
       $this->EndSaleDateTime = null;
      } else {
        $this->EndSaleDateTime = $EndSaleDateTime->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodID()
    {
      return $this->PaymentMethodID;
    }

    /**
     * @param int $PaymentMethodID
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRequest
     */
    public function setPaymentMethodID($PaymentMethodID)
    {
      $this->PaymentMethodID = $PaymentMethodID;
      return $this;
    }

}
