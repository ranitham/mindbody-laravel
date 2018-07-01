<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetRelationshipsResult extends MBResult
{

    /**
     * @var ArrayOfRelationship $Relationships
     */
    public $Relationships = null;

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
     * @return ArrayOfRelationship
     */
    public function getRelationships()
    {
      return $this->Relationships;
    }

    /**
     * @param ArrayOfRelationship $Relationships
     * @return \Nlocascio\Mindbody\MBOSoap\GetRelationshipsResult
     */
    public function setRelationships($Relationships)
    {
      $this->Relationships = $Relationships;
      return $this;
    }

}
