<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomClientFieldsResponse
{

    /**
     * @var GetCustomClientFieldsResult $GetCustomClientFieldsResult
     */
    public $GetCustomClientFieldsResult = null;

    /**
     * @param GetCustomClientFieldsResult $GetCustomClientFieldsResult
     */
    public function __construct($GetCustomClientFieldsResult)
    {
      $this->GetCustomClientFieldsResult = $GetCustomClientFieldsResult;
    }

    /**
     * @return GetCustomClientFieldsResult
     */
    public function getGetCustomClientFieldsResult()
    {
      return $this->GetCustomClientFieldsResult;
    }

    /**
     * @param GetCustomClientFieldsResult $GetCustomClientFieldsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomClientFieldsResponse
     */
    public function setGetCustomClientFieldsResult($GetCustomClientFieldsResult)
    {
      $this->GetCustomClientFieldsResult = $GetCustomClientFieldsResult;
      return $this;
    }

}
