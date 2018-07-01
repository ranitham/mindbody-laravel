<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveFromWaitlistResponse
{

    /**
     * @var RemoveFromWaitlistResult $RemoveFromWaitlistResult
     */
    public $RemoveFromWaitlistResult = null;

    /**
     * @param RemoveFromWaitlistResult $RemoveFromWaitlistResult
     */
    public function __construct($RemoveFromWaitlistResult)
    {
      $this->RemoveFromWaitlistResult = $RemoveFromWaitlistResult;
    }

    /**
     * @return RemoveFromWaitlistResult
     */
    public function getRemoveFromWaitlistResult()
    {
      return $this->RemoveFromWaitlistResult;
    }

    /**
     * @param RemoveFromWaitlistResult $RemoveFromWaitlistResult
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveFromWaitlistResponse
     */
    public function setRemoveFromWaitlistResult($RemoveFromWaitlistResult)
    {
      $this->RemoveFromWaitlistResult = $RemoveFromWaitlistResult;
      return $this;
    }

}
