<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProgramsResponse
{

    /**
     * @var GetProgramsResult $GetProgramsResult
     */
    public $GetProgramsResult = null;

    /**
     * @param GetProgramsResult $GetProgramsResult
     */
    public function __construct($GetProgramsResult)
    {
      $this->GetProgramsResult = $GetProgramsResult;
    }

    /**
     * @return GetProgramsResult
     */
    public function getGetProgramsResult()
    {
      return $this->GetProgramsResult;
    }

    /**
     * @param GetProgramsResult $GetProgramsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetProgramsResponse
     */
    public function setGetProgramsResult($GetProgramsResult)
    {
      $this->GetProgramsResult = $GetProgramsResult;
      return $this;
    }

}
