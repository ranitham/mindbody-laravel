<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientServicesResult extends MBResult
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
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientServicesResult
     */
    public function setClientServices($ClientServices)
    {
      $this->ClientServices = $ClientServices;
      return $this;
    }

}
