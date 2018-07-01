<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomPaymentMethodsResult extends MBResult
{

    /**
     * @var ArrayOfCustomPaymentInfo $PaymentMethods
     */
    public $PaymentMethods = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfCustomPaymentInfo
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param ArrayOfCustomPaymentInfo $PaymentMethods
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomPaymentMethodsResult
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

}
