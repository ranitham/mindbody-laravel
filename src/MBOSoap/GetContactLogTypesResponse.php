<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContactLogTypesResponse
{

    /**
     * @var GetContactLogTypesResult $GetContactLogTypesResult
     */
    public $GetContactLogTypesResult = null;

    /**
     * @param GetContactLogTypesResult $GetContactLogTypesResult
     */
    public function __construct($GetContactLogTypesResult)
    {
      $this->GetContactLogTypesResult = $GetContactLogTypesResult;
    }

    /**
     * @return GetContactLogTypesResult
     */
    public function getGetContactLogTypesResult()
    {
      return $this->GetContactLogTypesResult;
    }

    /**
     * @param GetContactLogTypesResult $GetContactLogTypesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetContactLogTypesResponse
     */
    public function setGetContactLogTypesResult($GetContactLogTypesResult)
    {
      $this->GetContactLogTypesResult = $GetContactLogTypesResult;
      return $this;
    }

}
