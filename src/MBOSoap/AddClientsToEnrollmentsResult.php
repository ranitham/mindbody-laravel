<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToEnrollmentsResult extends MBResult
{

    /**
     * @var ArrayOfClassSchedule $Enrollments
     */
    public $Enrollments = null;

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
    public function getEnrollments()
    {
      return $this->Enrollments;
    }

    /**
     * @param ArrayOfClassSchedule $Enrollments
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsResult
     */
    public function setEnrollments($Enrollments)
    {
      $this->Enrollments = $Enrollments;
      return $this;
    }

}
