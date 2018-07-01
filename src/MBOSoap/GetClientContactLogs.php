<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContactLogs
{

    /**
     * @var GetClientContactLogsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientContactLogsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientContactLogsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientContactLogsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogs
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
