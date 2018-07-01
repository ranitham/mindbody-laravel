<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateServicesResult extends MBResult
{

    /**
     * @var ArrayOfService $Services
     */
    public $Services = null;

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
     * @return ArrayOfService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfService $Services
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateServicesResult
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

}
