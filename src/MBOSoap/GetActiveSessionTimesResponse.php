<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveSessionTimesResponse
{

    /**
     * @var GetActiveSessionTimesResult $GetActiveSessionTimesResult
     */
    public $GetActiveSessionTimesResult = null;

    /**
     * @param GetActiveSessionTimesResult $GetActiveSessionTimesResult
     */
    public function __construct($GetActiveSessionTimesResult)
    {
      $this->GetActiveSessionTimesResult = $GetActiveSessionTimesResult;
    }

    /**
     * @return GetActiveSessionTimesResult
     */
    public function getGetActiveSessionTimesResult()
    {
      return $this->GetActiveSessionTimesResult;
    }

    /**
     * @param GetActiveSessionTimesResult $GetActiveSessionTimesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveSessionTimesResponse
     */
    public function setGetActiveSessionTimesResult($GetActiveSessionTimesResult)
    {
      $this->GetActiveSessionTimesResult = $GetActiveSessionTimesResult;
      return $this;
    }

}
