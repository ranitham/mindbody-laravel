<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveSessionTimes
{

    /**
     * @var GetActiveSessionTimesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetActiveSessionTimesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetActiveSessionTimesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetActiveSessionTimesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
