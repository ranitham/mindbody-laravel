<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CheckoutShoppingCartResponse
{

    /**
     * @var CheckoutShoppingCartResult $CheckoutShoppingCartResult
     */
    public $CheckoutShoppingCartResult = null;

    /**
     * @param CheckoutShoppingCartResult $CheckoutShoppingCartResult
     */
    public function __construct($CheckoutShoppingCartResult)
    {
      $this->CheckoutShoppingCartResult = $CheckoutShoppingCartResult;
    }

    /**
     * @return CheckoutShoppingCartResult
     */
    public function getCheckoutShoppingCartResult()
    {
      return $this->CheckoutShoppingCartResult;
    }

    /**
     * @param CheckoutShoppingCartResult $CheckoutShoppingCartResult
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartResponse
     */
    public function setCheckoutShoppingCartResult($CheckoutShoppingCartResult)
    {
      $this->CheckoutShoppingCartResult = $CheckoutShoppingCartResult;
      return $this;
    }

}
