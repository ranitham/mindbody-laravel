<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientSchedule
{

    /**
     * @var GetClientScheduleRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientScheduleRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientScheduleRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientScheduleRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientSchedule
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
