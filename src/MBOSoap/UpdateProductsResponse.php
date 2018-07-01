<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateProductsResponse
{

    /**
     * @var UpdateProductsResult $UpdateProductsResult
     */
    public $UpdateProductsResult = null;

    /**
     * @param UpdateProductsResult $UpdateProductsResult
     */
    public function __construct($UpdateProductsResult)
    {
      $this->UpdateProductsResult = $UpdateProductsResult;
    }

    /**
     * @return UpdateProductsResult
     */
    public function getUpdateProductsResult()
    {
      return $this->UpdateProductsResult;
    }

    /**
     * @param UpdateProductsResult $UpdateProductsResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateProductsResponse
     */
    public function setUpdateProductsResult($UpdateProductsResult)
    {
      $this->UpdateProductsResult = $UpdateProductsResult;
      return $this;
    }

}
