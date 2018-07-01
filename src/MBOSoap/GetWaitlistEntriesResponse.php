<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetWaitlistEntriesResponse
{

    /**
     * @var GetWaitlistEntriesResult $GetWaitlistEntriesResult
     */
    public $GetWaitlistEntriesResult = null;

    /**
     * @param GetWaitlistEntriesResult $GetWaitlistEntriesResult
     */
    public function __construct($GetWaitlistEntriesResult)
    {
      $this->GetWaitlistEntriesResult = $GetWaitlistEntriesResult;
    }

    /**
     * @return GetWaitlistEntriesResult
     */
    public function getGetWaitlistEntriesResult()
    {
      return $this->GetWaitlistEntriesResult;
    }

    /**
     * @param GetWaitlistEntriesResult $GetWaitlistEntriesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesResponse
     */
    public function setGetWaitlistEntriesResult($GetWaitlistEntriesResult)
    {
      $this->GetWaitlistEntriesResult = $GetWaitlistEntriesResult;
      return $this;
    }

}
