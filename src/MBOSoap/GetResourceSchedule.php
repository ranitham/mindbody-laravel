<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResourceSchedule
{

    /**
     * @var GetResourceScheduleRequest $Request
     */
    public $Request = null;

    /**
     * @param GetResourceScheduleRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetResourceScheduleRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetResourceScheduleRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourceSchedule
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
