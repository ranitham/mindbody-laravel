<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProductsRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ProductIDs
     */
    public $ProductIDs = null;

    /**
     * @var string $SearchText
     */
    public $SearchText = null;

    /**
     * @var string $SearchDomain
     */
    public $SearchDomain = null;

    /**
     * @var ArrayOfInt $CategoryIDs
     */
    public $CategoryIDs = null;

    /**
     * @var ArrayOfInt $SubCategoryIDs
     */
    public $SubCategoryIDs = null;

    /**
     * @var boolean $SellOnline
     */
    public $SellOnline = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @param boolean $SellOnline
     */
    public function __construct($SellOnline)
    {
      parent::__construct();
      $this->SellOnline = $SellOnline;
    }

    /**
     * @return ArrayOfString
     */
    public function getProductIDs()
    {
      return $this->ProductIDs;
    }

    /**
     * @param ArrayOfString $ProductIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setProductIDs($ProductIDs)
    {
      $this->ProductIDs = $ProductIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchDomain()
    {
      return $this->SearchDomain;
    }

    /**
     * @param string $SearchDomain
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setSearchDomain($SearchDomain)
    {
      $this->SearchDomain = $SearchDomain;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCategoryIDs()
    {
      return $this->CategoryIDs;
    }

    /**
     * @param ArrayOfInt $CategoryIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setCategoryIDs($CategoryIDs)
    {
      $this->CategoryIDs = $CategoryIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSubCategoryIDs()
    {
      return $this->SubCategoryIDs;
    }

    /**
     * @param ArrayOfInt $SubCategoryIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setSubCategoryIDs($SubCategoryIDs)
    {
      $this->SubCategoryIDs = $SubCategoryIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellOnline()
    {
      return $this->SellOnline;
    }

    /**
     * @param boolean $SellOnline
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setSellOnline($SellOnline)
    {
      $this->SellOnline = $SellOnline;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\GetProductsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
