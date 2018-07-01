<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetWaitlistEntries
{

    /**
     * @var GetWaitlistEntriesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetWaitlistEntriesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetWaitlistEntriesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetWaitlistEntriesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntries
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
