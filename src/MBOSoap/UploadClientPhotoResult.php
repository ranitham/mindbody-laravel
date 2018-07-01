<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientPhotoResult extends MBResult
{

    /**
     * @var string $PhotoUrl
     */
    public $PhotoUrl = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

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
     * @return string
     */
    public function getPhotoUrl()
    {
      return $this->PhotoUrl;
    }

    /**
     * @param string $PhotoUrl
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhotoResult
     */
    public function setPhotoUrl($PhotoUrl)
    {
      $this->PhotoUrl = $PhotoUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhotoResult
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}
