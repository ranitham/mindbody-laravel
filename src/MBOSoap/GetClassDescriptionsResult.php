<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassDescriptionsResult extends MBResult
{

    /**
     * @var ArrayOfClassDescription $ClassDescriptions
     */
    public $ClassDescriptions = null;

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
     * @return ArrayOfClassDescription
     */
    public function getClassDescriptions()
    {
      return $this->ClassDescriptions;
    }

    /**
     * @param ArrayOfClassDescription $ClassDescriptions
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsResult
     */
    public function setClassDescriptions($ClassDescriptions)
    {
      $this->ClassDescriptions = $ClassDescriptions;
      return $this;
    }

}
