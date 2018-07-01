<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSessionTypesResponse
{

    /**
     * @var GetSessionTypesResult $GetSessionTypesResult
     */
    public $GetSessionTypesResult = null;

    /**
     * @param GetSessionTypesResult $GetSessionTypesResult
     */
    public function __construct($GetSessionTypesResult)
    {
      $this->GetSessionTypesResult = $GetSessionTypesResult;
    }

    /**
     * @return GetSessionTypesResult
     */
    public function getGetSessionTypesResult()
    {
      return $this->GetSessionTypesResult;
    }

    /**
     * @param GetSessionTypesResult $GetSessionTypesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetSessionTypesResponse
     */
    public function setGetSessionTypesResult($GetSessionTypesResult)
    {
      $this->GetSessionTypesResult = $GetSessionTypesResult;
      return $this;
    }

}
