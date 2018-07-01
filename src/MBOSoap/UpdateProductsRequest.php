<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateProductsRequest extends MBRequest
{

    /**
     * @var ArrayOfProduct $Products
     */
    public $Products = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateProductsRequest
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateProductsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
