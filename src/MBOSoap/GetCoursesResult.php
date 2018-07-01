<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCoursesResult extends MBResult
{

    /**
     * @var ArrayOfCourse $Courses
     */
    public $Courses = null;

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
     * @return ArrayOfCourse
     */
    public function getCourses()
    {
      return $this->Courses;
    }

    /**
     * @param ArrayOfCourse $Courses
     * @return \Nlocascio\Mindbody\MBOSoap\GetCoursesResult
     */
    public function setCourses($Courses)
    {
      $this->Courses = $Courses;
      return $this;
    }

}
