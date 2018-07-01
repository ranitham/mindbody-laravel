<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassVisitsResponse
{

    /**
     * @var GetClassVisitsResult $GetClassVisitsResult
     */
    public $GetClassVisitsResult = null;

    /**
     * @param GetClassVisitsResult $GetClassVisitsResult
     */
    public function __construct($GetClassVisitsResult)
    {
      $this->GetClassVisitsResult = $GetClassVisitsResult;
    }

    /**
     * @return GetClassVisitsResult
     */
    public function getGetClassVisitsResult()
    {
      return $this->GetClassVisitsResult;
    }

    /**
     * @param GetClassVisitsResult $GetClassVisitsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassVisitsResponse
     */
    public function setGetClassVisitsResult($GetClassVisitsResult)
    {
      $this->GetClassVisitsResult = $GetClassVisitsResult;
      return $this;
    }

}
