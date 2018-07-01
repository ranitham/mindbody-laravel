<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetLocationsResponse
{

    /**
     * @var GetLocationsResult $GetLocationsResult
     */
    public $GetLocationsResult = null;

    /**
     * @param GetLocationsResult $GetLocationsResult
     */
    public function __construct($GetLocationsResult)
    {
      $this->GetLocationsResult = $GetLocationsResult;
    }

    /**
     * @return GetLocationsResult
     */
    public function getGetLocationsResult()
    {
      return $this->GetLocationsResult;
    }

    /**
     * @param GetLocationsResult $GetLocationsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetLocationsResponse
     */
    public function setGetLocationsResult($GetLocationsResult)
    {
      $this->GetLocationsResult = $GetLocationsResult;
      return $this;
    }

}
