<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSitesResult extends MBResult
{

    /**
     * @var ArrayOfSite $Sites
     */
    public $Sites = null;

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
     * @return ArrayOfSite
     */
    public function getSites()
    {
      return $this->Sites;
    }

    /**
     * @param ArrayOfSite $Sites
     * @return \Nlocascio\Mindbody\MBOSoap\GetSitesResult
     */
    public function setSites($Sites)
    {
      $this->Sites = $Sites;
      return $this;
    }

}
