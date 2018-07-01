<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetScheduleItemsResponse
{

    /**
     * @var GetScheduleItemsResult $GetScheduleItemsResult
     */
    public $GetScheduleItemsResult = null;

    /**
     * @param GetScheduleItemsResult $GetScheduleItemsResult
     */
    public function __construct($GetScheduleItemsResult)
    {
      $this->GetScheduleItemsResult = $GetScheduleItemsResult;
    }

    /**
     * @return GetScheduleItemsResult
     */
    public function getGetScheduleItemsResult()
    {
      return $this->GetScheduleItemsResult;
    }

    /**
     * @param GetScheduleItemsResult $GetScheduleItemsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItemsResponse
     */
    public function setGetScheduleItemsResult($GetScheduleItemsResult)
    {
      $this->GetScheduleItemsResult = $GetScheduleItemsResult;
      return $this;
    }

}
