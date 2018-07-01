<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SubtituteClassTeacherResponse
{

    /**
     * @var SubstituteClassTeacherResult $SubtituteClassTeacherResult
     */
    public $SubtituteClassTeacherResult = null;

    /**
     * @param SubstituteClassTeacherResult $SubtituteClassTeacherResult
     */
    public function __construct($SubtituteClassTeacherResult)
    {
      $this->SubtituteClassTeacherResult = $SubtituteClassTeacherResult;
    }

    /**
     * @return SubstituteClassTeacherResult
     */
    public function getSubtituteClassTeacherResult()
    {
      return $this->SubtituteClassTeacherResult;
    }

    /**
     * @param SubstituteClassTeacherResult $SubtituteClassTeacherResult
     * @return \Nlocascio\Mindbody\MBOSoap\SubtituteClassTeacherResponse
     */
    public function setSubtituteClassTeacherResult($SubtituteClassTeacherResult)
    {
      $this->SubtituteClassTeacherResult = $SubtituteClassTeacherResult;
      return $this;
    }

}
