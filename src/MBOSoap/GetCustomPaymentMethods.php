<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomPaymentMethods
{

    /**
     * @var GetCustomPaymentMethodsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetCustomPaymentMethodsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCustomPaymentMethodsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCustomPaymentMethodsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomPaymentMethods
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
