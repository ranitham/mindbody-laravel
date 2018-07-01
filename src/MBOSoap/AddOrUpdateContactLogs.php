<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateContactLogs
{

    /**
     * @var AddOrUpdateContactLogsRequest $Request
     */
    public $Request = null;

    /**
     * @param AddOrUpdateContactLogsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateContactLogsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateContactLogsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateContactLogs
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
