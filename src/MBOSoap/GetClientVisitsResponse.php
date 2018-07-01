<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientVisitsResponse
{

    /**
     * @var GetClientVisitsResult $GetClientVisitsResult
     */
    public $GetClientVisitsResult = null;

    /**
     * @param GetClientVisitsResult $GetClientVisitsResult
     */
    public function __construct($GetClientVisitsResult)
    {
      $this->GetClientVisitsResult = $GetClientVisitsResult;
    }

    /**
     * @return GetClientVisitsResult
     */
    public function getGetClientVisitsResult()
    {
      return $this->GetClientVisitsResult;
    }

    /**
     * @param GetClientVisitsResult $GetClientVisitsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsResponse
     */
    public function setGetClientVisitsResult($GetClientVisitsResult)
    {
      $this->GetClientVisitsResult = $GetClientVisitsResult;
      return $this;
    }

}
