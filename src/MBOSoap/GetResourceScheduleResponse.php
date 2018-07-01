<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResourceScheduleResponse
{

    /**
     * @var GetResourceScheduleResult $GetResourceScheduleResult
     */
    public $GetResourceScheduleResult = null;

    /**
     * @param GetResourceScheduleResult $GetResourceScheduleResult
     */
    public function __construct($GetResourceScheduleResult)
    {
      $this->GetResourceScheduleResult = $GetResourceScheduleResult;
    }

    /**
     * @return GetResourceScheduleResult
     */
    public function getGetResourceScheduleResult()
    {
      return $this->GetResourceScheduleResult;
    }

    /**
     * @param GetResourceScheduleResult $GetResourceScheduleResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourceScheduleResponse
     */
    public function setGetResourceScheduleResult($GetResourceScheduleResult)
    {
      $this->GetResourceScheduleResult = $GetResourceScheduleResult;
      return $this;
    }

}
