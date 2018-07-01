<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesRepsResult extends MBResult
{

    /**
     * @var ArrayOfSalesRep $SalesReps
     */
    public $SalesReps = null;

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
     * @return ArrayOfSalesRep
     */
    public function getSalesReps()
    {
      return $this->SalesReps;
    }

    /**
     * @param ArrayOfSalesRep $SalesReps
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRepsResult
     */
    public function setSalesReps($SalesReps)
    {
      $this->SalesReps = $SalesReps;
      return $this;
    }

}
