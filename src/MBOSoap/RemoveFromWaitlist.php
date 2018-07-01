<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveFromWaitlist
{

    /**
     * @var RemoveFromWaitlistRequest $Request
     */
    public $Request = null;

    /**
     * @param RemoveFromWaitlistRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return RemoveFromWaitlistRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RemoveFromWaitlistRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveFromWaitlist
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
