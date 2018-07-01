<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCrossRegionalClientAssociationsResult extends MBResult
{

    /**
     * @var ArrayOfCrossRegionalAssociation $CrossRegionalClientAssociations
     */
    public $CrossRegionalClientAssociations = null;

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
     * @return ArrayOfCrossRegionalAssociation
     */
    public function getCrossRegionalClientAssociations()
    {
      return $this->CrossRegionalClientAssociations;
    }

    /**
     * @param ArrayOfCrossRegionalAssociation $CrossRegionalClientAssociations
     * @return \Nlocascio\Mindbody\MBOSoap\GetCrossRegionalClientAssociationsResult
     */
    public function setCrossRegionalClientAssociations($CrossRegionalClientAssociations)
    {
      $this->CrossRegionalClientAssociations = $CrossRegionalClientAssociations;
      return $this;
    }

}
