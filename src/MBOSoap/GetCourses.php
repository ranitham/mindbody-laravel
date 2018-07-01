<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCourses
{

    /**
     * @var GetCoursesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetCoursesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCoursesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCoursesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetCourses
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
