<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PagedBySitesMBResult extends MBResult
{

    /**
     * @var int $ClientAssociatedSitesOffset
     */
    public $ClientAssociatedSitesOffset = null;

    /**
     * @var int $ClientAssociatedSitesTotalResults
     */
    public $ClientAssociatedSitesTotalResults = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     * @param int $ClientAssociatedSitesOffset
     * @param int $ClientAssociatedSitesTotalResults
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $ClientAssociatedSitesOffset, $ClientAssociatedSitesTotalResults)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
      $this->ClientAssociatedSitesTotalResults = $ClientAssociatedSitesTotalResults;
    }

    /**
     * @return int
     */
    public function getClientAssociatedSitesOffset()
    {
      return $this->ClientAssociatedSitesOffset;
    }

    /**
     * @param int $ClientAssociatedSitesOffset
     * @return \Nlocascio\Mindbody\MBOSoap\PagedBySitesMBResult
     */
    public function setClientAssociatedSitesOffset($ClientAssociatedSitesOffset)
    {
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientAssociatedSitesTotalResults()
    {
      return $this->ClientAssociatedSitesTotalResults;
    }

    /**
     * @param int $ClientAssociatedSitesTotalResults
     * @return \Nlocascio\Mindbody\MBOSoap\PagedBySitesMBResult
     */
    public function setClientAssociatedSitesTotalResults($ClientAssociatedSitesTotalResults)
    {
      $this->ClientAssociatedSitesTotalResults = $ClientAssociatedSitesTotalResults;
      return $this;
    }

}
