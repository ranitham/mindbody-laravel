<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProductsResult extends MBResult
{

    /**
     * @var ArrayOfProduct $Products
     */
    public $Products = null;

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
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsResult
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

}
