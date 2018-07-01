<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCoursesResponse
{

    /**
     * @var GetCoursesResult $GetCoursesResult
     */
    public $GetCoursesResult = null;

    /**
     * @param GetCoursesResult $GetCoursesResult
     */
    public function __construct($GetCoursesResult)
    {
      $this->GetCoursesResult = $GetCoursesResult;
    }

    /**
     * @return GetCoursesResult
     */
    public function getGetCoursesResult()
    {
      return $this->GetCoursesResult;
    }

    /**
     * @param GetCoursesResult $GetCoursesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetCoursesResponse
     */
    public function setGetCoursesResult($GetCoursesResult)
    {
      $this->GetCoursesResult = $GetCoursesResult;
      return $this;
    }

}
