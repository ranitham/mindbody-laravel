<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SubtituteClassTeacher
{

    /**
     * @var SubstituteClassTeacherRequest $Request
     */
    public $Request = null;

    /**
     * @param SubstituteClassTeacherRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return SubstituteClassTeacherRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param SubstituteClassTeacherRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\SubtituteClassTeacher
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
