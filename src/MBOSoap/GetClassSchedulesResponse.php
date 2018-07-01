<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassSchedulesResponse
{

    /**
     * @var GetClassSchedulesResult $GetClassSchedulesResult
     */
    public $GetClassSchedulesResult = null;

    /**
     * @param GetClassSchedulesResult $GetClassSchedulesResult
     */
    public function __construct($GetClassSchedulesResult)
    {
      $this->GetClassSchedulesResult = $GetClassSchedulesResult;
    }

    /**
     * @return GetClassSchedulesResult
     */
    public function getGetClassSchedulesResult()
    {
      return $this->GetClassSchedulesResult;
    }

    /**
     * @param GetClassSchedulesResult $GetClassSchedulesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassSchedulesResponse
     */
    public function setGetClassSchedulesResult($GetClassSchedulesResult)
    {
      $this->GetClassSchedulesResult = $GetClassSchedulesResult;
      return $this;
    }

}
