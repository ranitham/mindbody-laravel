<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomPaymentMethodsResponse
{

    /**
     * @var GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     */
    public $GetCustomPaymentMethodsResult = null;

    /**
     * @param GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     */
    public function __construct($GetCustomPaymentMethodsResult)
    {
      $this->GetCustomPaymentMethodsResult = $GetCustomPaymentMethodsResult;
    }

    /**
     * @return GetCustomPaymentMethodsResult
     */
    public function getGetCustomPaymentMethodsResult()
    {
      return $this->GetCustomPaymentMethodsResult;
    }

    /**
     * @param GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomPaymentMethodsResponse
     */
    public function setGetCustomPaymentMethodsResult($GetCustomPaymentMethodsResult)
    {
      $this->GetCustomPaymentMethodsResult = $GetCustomPaymentMethodsResult;
      return $this;
    }

}
