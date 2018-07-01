<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProducts
{

    /**
     * @var GetProductsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetProductsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetProductsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetProductsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetProducts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
