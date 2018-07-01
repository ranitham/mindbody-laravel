<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetRequiredClientFieldsResponse
{

    /**
     * @var GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     */
    public $GetRequiredClientFieldsResult = null;

    /**
     * @param GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     */
    public function __construct($GetRequiredClientFieldsResult)
    {
      $this->GetRequiredClientFieldsResult = $GetRequiredClientFieldsResult;
    }

    /**
     * @return GetRequiredClientFieldsResult
     */
    public function getGetRequiredClientFieldsResult()
    {
      return $this->GetRequiredClientFieldsResult;
    }

    /**
     * @param GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetRequiredClientFieldsResponse
     */
    public function setGetRequiredClientFieldsResult($GetRequiredClientFieldsResult)
    {
      $this->GetRequiredClientFieldsResult = $GetRequiredClientFieldsResult;
      return $this;
    }

}
