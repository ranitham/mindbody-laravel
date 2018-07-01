<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateProducts
{

    /**
     * @var UpdateProductsRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateProductsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateProductsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateProductsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateProducts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
