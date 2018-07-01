<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSitesResponse
{

    /**
     * @var GetSitesResult $GetSitesResult
     */
    public $GetSitesResult = null;

    /**
     * @param GetSitesResult $GetSitesResult
     */
    public function __construct($GetSitesResult)
    {
      $this->GetSitesResult = $GetSitesResult;
    }

    /**
     * @return GetSitesResult
     */
    public function getGetSitesResult()
    {
      return $this->GetSitesResult;
    }

    /**
     * @param GetSitesResult $GetSitesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetSitesResponse
     */
    public function setGetSitesResult($GetSitesResult)
    {
      $this->GetSitesResult = $GetSitesResult;
      return $this;
    }

}
