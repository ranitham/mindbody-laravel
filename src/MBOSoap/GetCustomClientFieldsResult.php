<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomClientFieldsResult extends MBResult
{

    /**
     * @var ArrayOfCustomClientField $CustomClientFields
     */
    public $CustomClientFields = null;

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
     * @return ArrayOfCustomClientField
     */
    public function getCustomClientFields()
    {
      return $this->CustomClientFields;
    }

    /**
     * @param ArrayOfCustomClientField $CustomClientFields
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomClientFieldsResult
     */
    public function setCustomClientFields($CustomClientFields)
    {
      $this->CustomClientFields = $CustomClientFields;
      return $this;
    }

}
