<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassSchedulesResult extends MBResult
{

    /**
     * @var ArrayOfClassSchedule $ClassSchedules
     */
    public $ClassSchedules = null;

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
     * @return ArrayOfClassSchedule
     */
    public function getClassSchedules()
    {
      return $this->ClassSchedules;
    }

    /**
     * @param ArrayOfClassSchedule $ClassSchedules
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassSchedulesResult
     */
    public function setClassSchedules($ClassSchedules)
    {
      $this->ClassSchedules = $ClassSchedules;
      return $this;
    }

}
