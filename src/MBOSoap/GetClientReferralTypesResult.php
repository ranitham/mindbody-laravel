<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientReferralTypesResult extends MBResult
{

    /**
     * @var ArrayOfString $ReferralTypes
     */
    public $ReferralTypes = null;

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
     * @return ArrayOfString
     */
    public function getReferralTypes()
    {
      return $this->ReferralTypes;
    }

    /**
     * @param ArrayOfString $ReferralTypes
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientReferralTypesResult
     */
    public function setReferralTypes($ReferralTypes)
    {
      $this->ReferralTypes = $ReferralTypes;
      return $this;
    }

}
