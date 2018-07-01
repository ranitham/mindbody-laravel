<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCrossRegionalClientAssociationsResponse
{

    /**
     * @var GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     */
    public $GetCrossRegionalClientAssociationsResult = null;

    /**
     * @param GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     */
    public function __construct($GetCrossRegionalClientAssociationsResult)
    {
      $this->GetCrossRegionalClientAssociationsResult = $GetCrossRegionalClientAssociationsResult;
    }

    /**
     * @return GetCrossRegionalClientAssociationsResult
     */
    public function getGetCrossRegionalClientAssociationsResult()
    {
      return $this->GetCrossRegionalClientAssociationsResult;
    }

    /**
     * @param GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetCrossRegionalClientAssociationsResponse
     */
    public function setGetCrossRegionalClientAssociationsResult($GetCrossRegionalClientAssociationsResult)
    {
      $this->GetCrossRegionalClientAssociationsResult = $GetCrossRegionalClientAssociationsResult;
      return $this;
    }

}
