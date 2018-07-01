<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetMobileProvidersResult extends MBResult
{

    /**
     * @var ArrayOfMobileProvider $MobileProviders
     */
    public $MobileProviders = null;

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
     * @return ArrayOfMobileProvider
     */
    public function getMobileProviders()
    {
      return $this->MobileProviders;
    }

    /**
     * @param ArrayOfMobileProvider $MobileProviders
     * @return \Nlocascio\Mindbody\MBOSoap\GetMobileProvidersResult
     */
    public function setMobileProviders($MobileProviders)
    {
      $this->MobileProviders = $MobileProviders;
      return $this;
    }

}
