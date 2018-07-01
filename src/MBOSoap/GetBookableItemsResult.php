<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetBookableItemsResult extends MBResult
{

    /**
     * @var ArrayOfScheduleItem $ScheduleItems
     */
    public $ScheduleItems = null;

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
     * @return ArrayOfScheduleItem
     */
    public function getScheduleItems()
    {
      return $this->ScheduleItems;
    }

    /**
     * @param ArrayOfScheduleItem $ScheduleItems
     * @return \Nlocascio\Mindbody\MBOSoap\GetBookableItemsResult
     */
    public function setScheduleItems($ScheduleItems)
    {
      $this->ScheduleItems = $ScheduleItems;
      return $this;
    }

}
