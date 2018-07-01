<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientServicesResult extends PagedBySitesMBResult
{

    /**
     * @var ArrayOfClientService $ClientServices
     */
    public $ClientServices = null;

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
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $ClientAssociatedSitesOffset, $ClientAssociatedSitesTotalResults);
    }

    /**
     * @return ArrayOfClientService
     */
    public function getClientServices()
    {
      return $this->ClientServices;
    }

    /**
     * @param ArrayOfClientService $ClientServices
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientServicesResult
     */
    public function setClientServices($ClientServices)
    {
      $this->ClientServices = $ClientServices;
      return $this;
    }

}
