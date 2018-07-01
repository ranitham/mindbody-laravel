<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProductsResponse
{

    /**
     * @var GetProductsResult $GetProductsResult
     */
    public $GetProductsResult = null;

    /**
     * @param GetProductsResult $GetProductsResult
     */
    public function __construct($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
    }

    /**
     * @return GetProductsResult
     */
    public function getGetProductsResult()
    {
      return $this->GetProductsResult;
    }

    /**
     * @param GetProductsResult $GetProductsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsResponse
     */
    public function setGetProductsResult($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
      return $this;
    }

}
