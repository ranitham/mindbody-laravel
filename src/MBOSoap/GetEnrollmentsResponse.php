<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetEnrollmentsResponse
{

    /**
     * @var GetEnrollmentsResult $GetEnrollmentsResult
     */
    public $GetEnrollmentsResult = null;

    /**
     * @param GetEnrollmentsResult $GetEnrollmentsResult
     */
    public function __construct($GetEnrollmentsResult)
    {
      $this->GetEnrollmentsResult = $GetEnrollmentsResult;
    }

    /**
     * @return GetEnrollmentsResult
     */
    public function getGetEnrollmentsResult()
    {
      return $this->GetEnrollmentsResult;
    }

    /**
     * @param GetEnrollmentsResult $GetEnrollmentsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsResponse
     */
    public function setGetEnrollmentsResult($GetEnrollmentsResult)
    {
      $this->GetEnrollmentsResult = $GetEnrollmentsResult;
      return $this;
    }

}
