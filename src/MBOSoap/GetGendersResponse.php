<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetGendersResponse
{

    /**
     * @var GetGendersResult $GetGendersResult
     */
    public $GetGendersResult = null;

    /**
     * @param GetGendersResult $GetGendersResult
     */
    public function __construct($GetGendersResult)
    {
      $this->GetGendersResult = $GetGendersResult;
    }

    /**
     * @return GetGendersResult
     */
    public function getGetGendersResult()
    {
      return $this->GetGendersResult;
    }

    /**
     * @param GetGendersResult $GetGendersResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetGendersResponse
     */
    public function setGetGendersResult($GetGendersResult)
    {
      $this->GetGendersResult = $GetGendersResult;
      return $this;
    }

}
