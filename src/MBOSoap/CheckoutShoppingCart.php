<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CheckoutShoppingCart
{

    /**
     * @var CheckoutShoppingCartRequest $Request
     */
    public $Request = null;

    /**
     * @param CheckoutShoppingCartRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return CheckoutShoppingCartRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param CheckoutShoppingCartRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCart
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
