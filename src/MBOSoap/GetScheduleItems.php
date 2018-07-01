<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetScheduleItems
{

    /**
     * @var GetScheduleItemsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetScheduleItemsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetScheduleItemsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetScheduleItemsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetScheduleItems
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
