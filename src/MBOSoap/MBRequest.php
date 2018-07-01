<?php

namespace Nlocascio\Mindbody\MBOSoap;

class MBRequest
{

    /**
     * @var SourceCredentials $SourceCredentials
     */
    public $SourceCredentials = null;

    /**
     * @var UserCredentials $UserCredentials
     */
    public $UserCredentials = null;

    /**
     * @var XMLDetailLevel $XMLDetail
     */
    public $XMLDetail = null;

    /**
     * @var int $PageSize
     */
    public $PageSize = null;

    /**
     * @var int $CurrentPageIndex
     */
    public $CurrentPageIndex = null;

    /**
     * @var ArrayOfString $Fields
     */
    public $Fields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SourceCredentials
     */
    public function getSourceCredentials()
    {
      return $this->SourceCredentials;
    }

    /**
     * @param SourceCredentials $SourceCredentials
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setSourceCredentials($SourceCredentials)
    {
      $this->SourceCredentials = $SourceCredentials;
      return $this;
    }

    /**
     * @return UserCredentials
     */
    public function getUserCredentials()
    {
      return $this->UserCredentials;
    }

    /**
     * @param UserCredentials $UserCredentials
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return XMLDetailLevel
     */
    public function getXMLDetail()
    {
      return $this->XMLDetail;
    }

    /**
     * @param XMLDetailLevel $XMLDetail
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setXMLDetail($XMLDetail)
    {
      $this->XMLDetail = $XMLDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPageIndex()
    {
      return $this->CurrentPageIndex;
    }

    /**
     * @param int $CurrentPageIndex
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setCurrentPageIndex($CurrentPageIndex)
    {
      $this->CurrentPageIndex = $CurrentPageIndex;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFields()
    {
      return $this->Fields;
    }

    /**
     * @param ArrayOfString $Fields
     * @return \Nlocascio\Mindbody\MBOSoap\MBRequest
     */
    public function setFields($Fields)
    {
      $this->Fields = $Fields;
      return $this;
    }

}
