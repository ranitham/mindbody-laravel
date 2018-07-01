<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientScheduleResponse
{

    /**
     * @var GetClientScheduleResult $GetClientScheduleResult
     */
    public $GetClientScheduleResult = null;

    /**
     * @param GetClientScheduleResult $GetClientScheduleResult
     */
    public function __construct($GetClientScheduleResult)
    {
      $this->GetClientScheduleResult = $GetClientScheduleResult;
    }

    /**
     * @return GetClientScheduleResult
     */
    public function getGetClientScheduleResult()
    {
      return $this->GetClientScheduleResult;
    }

    /**
     * @param GetClientScheduleResult $GetClientScheduleResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientScheduleResponse
     */
    public function setGetClientScheduleResult($GetClientScheduleResult)
    {
      $this->GetClientScheduleResult = $GetClientScheduleResult;
      return $this;
    }

}
