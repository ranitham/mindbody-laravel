<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProspectStagesResult extends MBResult
{

    /**
     * @var ArrayOfProspectStage $ProspectStages
     */
    public $ProspectStages = null;

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
     * @return ArrayOfProspectStage
     */
    public function getProspectStages()
    {
      return $this->ProspectStages;
    }

    /**
     * @param ArrayOfProspectStage $ProspectStages
     * @return \Nlocascio\Mindbody\MBOSoap\GetProspectStagesResult
     */
    public function setProspectStages($ProspectStages)
    {
      $this->ProspectStages = $ProspectStages;
      return $this;
    }

}
