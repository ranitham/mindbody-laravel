<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContractsResult extends MBResult
{

    /**
     * @var ArrayOfContract $Contracts
     */
    public $Contracts = null;

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
     * @return ArrayOfContract
     */
    public function getContracts()
    {
      return $this->Contracts;
    }

    /**
     * @param ArrayOfContract $Contracts
     * @return \Nlocascio\Mindbody\MBOSoap\GetContractsResult
     */
    public function setContracts($Contracts)
    {
      $this->Contracts = $Contracts;
      return $this;
    }

}
