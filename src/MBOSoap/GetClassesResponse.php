<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassesResponse
{

    /**
     * @var GetClassesResult $GetClassesResult
     */
    public $GetClassesResult = null;

    /**
     * @param GetClassesResult $GetClassesResult
     */
    public function __construct($GetClassesResult)
    {
      $this->GetClassesResult = $GetClassesResult;
    }

    /**
     * @return GetClassesResult
     */
    public function getGetClassesResult()
    {
      return $this->GetClassesResult;
    }

    /**
     * @param GetClassesResult $GetClassesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassesResponse
     */
    public function setGetClassesResult($GetClassesResult)
    {
      $this->GetClassesResult = $GetClassesResult;
      return $this;
    }

}
