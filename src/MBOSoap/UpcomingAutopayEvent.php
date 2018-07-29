<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpcomingAutopayEvent
{

    /**
     * @var \Carbon\Carbon $ScheduleDate
     */
    public $ScheduleDate = null;

    /**
     * @var float $ChargeAmount
     */
    public $ChargeAmount = null;

    /**
     * @var EPaymentMethod $PaymentMethod
     */
    public $PaymentMethod = null;

    /**
     * @param EPaymentMethod $PaymentMethod
     */
    public function __construct($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getScheduleDate()
    {
      if ($this->ScheduleDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->ScheduleDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $ScheduleDate
     * @return \Nlocascio\Mindbody\MBOSoap\UpcomingAutopayEvent
     */
    public function setScheduleDate(\Carbon\Carbon $ScheduleDate = null)
    {
      if ($ScheduleDate == null) {
       $this->ScheduleDate = null;
      } else {
        $this->ScheduleDate = $ScheduleDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param float $ChargeAmount
     * @return \Nlocascio\Mindbody\MBOSoap\UpcomingAutopayEvent
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
      return $this;
    }

    /**
     * @return EPaymentMethod
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param EPaymentMethod $PaymentMethod
     * @return \Nlocascio\Mindbody\MBOSoap\UpcomingAutopayEvent
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

}
