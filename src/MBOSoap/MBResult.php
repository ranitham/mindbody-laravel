<?php

namespace Nlocascio\Mindbody\MBOSoap;

class MBResult
{

    /**
     * @var StatusCode $Status
     */
    public $Status = null;

    /**
     * @var int $ErrorCode
     */
    public $ErrorCode = null;

    /**
     * @var string $Message
     */
    public $Message = null;

    /**
     * @var XMLDetailLevel $XMLDetail
     */
    public $XMLDetail = null;

    /**
     * @var int $ResultCount
     */
    public $ResultCount = null;

    /**
     * @var int $CurrentPageIndex
     */
    public $CurrentPageIndex = null;

    /**
     * @var int $TotalPageCount
     */
    public $TotalPageCount = null;

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
      $this->Status = $Status;
      $this->ErrorCode = $ErrorCode;
      $this->XMLDetail = $XMLDetail;
      $this->ResultCount = $ResultCount;
      $this->CurrentPageIndex = $CurrentPageIndex;
      $this->TotalPageCount = $TotalPageCount;
    }

    /**
     * @return StatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StatusCode $Status
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
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
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setXMLDetail($XMLDetail)
    {
      $this->XMLDetail = $XMLDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
      return $this->ResultCount;
    }

    /**
     * @param int $ResultCount
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setResultCount($ResultCount)
    {
      $this->ResultCount = $ResultCount;
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
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setCurrentPageIndex($CurrentPageIndex)
    {
      $this->CurrentPageIndex = $CurrentPageIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPageCount()
    {
      return $this->TotalPageCount;
    }

    /**
     * @param int $TotalPageCount
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     */
    public function setTotalPageCount($TotalPageCount)
    {
      $this->TotalPageCount = $TotalPageCount;
      return $this;
    }

}
