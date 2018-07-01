<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassSchedules
{

    /**
     * @var GetClassSchedulesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClassSchedulesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassSchedulesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassSchedulesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassSchedules
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
