<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffImgURLResult extends MBResult
{

    /**
     * @var string $ImageURL
     */
    public $ImageURL = null;

    /**
     * @var string $MobileImageURL
     */
    public $MobileImageURL = null;

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
    public function getImageURL()
    {
      return $this->ImageURL;
    }

    /**
     * @param string $ImageURL
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffImgURLResult
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileImageURL()
    {
      return $this->MobileImageURL;
    }

    /**
     * @param string $MobileImageURL
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffImgURLResult
     */
    public function setMobileImageURL($MobileImageURL)
    {
      $this->MobileImageURL = $MobileImageURL;
      return $this;
    }

}
