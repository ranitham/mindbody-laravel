<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveClientMembershipsResult extends MBResult
{

    /**
     * @var ArrayOfClientMembership $ClientMemberships
     */
    public $ClientMemberships = null;

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
     * @return ArrayOfClientMembership
     */
    public function getClientMemberships()
    {
      return $this->ClientMemberships;
    }

    /**
     * @param ArrayOfClientMembership $ClientMemberships
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveClientMembershipsResult
     */
    public function setClientMemberships($ClientMemberships)
    {
      $this->ClientMemberships = $ClientMemberships;
      return $this;
    }

}
