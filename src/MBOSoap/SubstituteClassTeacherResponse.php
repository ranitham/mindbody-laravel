<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SubstituteClassTeacherResponse
{

    /**
     * @var SubstituteClassTeacherResult $SubstituteClassTeacherResult
     */
    public $SubstituteClassTeacherResult = null;

    /**
     * @param SubstituteClassTeacherResult $SubstituteClassTeacherResult
     */
    public function __construct($SubstituteClassTeacherResult)
    {
      $this->SubstituteClassTeacherResult = $SubstituteClassTeacherResult;
    }

    /**
     * @return SubstituteClassTeacherResult
     */
    public function getSubstituteClassTeacherResult()
    {
      return $this->SubstituteClassTeacherResult;
    }

    /**
     * @param SubstituteClassTeacherResult $SubstituteClassTeacherResult
     * @return \Nlocascio\Mindbody\MBOSoap\SubstituteClassTeacherResponse
     */
    public function setSubstituteClassTeacherResult($SubstituteClassTeacherResult)
    {
      $this->SubstituteClassTeacherResult = $SubstituteClassTeacherResult;
      return $this;
    }

}
