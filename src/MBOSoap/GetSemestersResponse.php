<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSemestersResponse
{

    /**
     * @var GetSemestersResult $GetSemestersResult
     */
    public $GetSemestersResult = null;

    /**
     * @param GetSemestersResult $GetSemestersResult
     */
    public function __construct($GetSemestersResult)
    {
      $this->GetSemestersResult = $GetSemestersResult;
    }

    /**
     * @return GetSemestersResult
     */
    public function getGetSemestersResult()
    {
      return $this->GetSemestersResult;
    }

    /**
     * @param GetSemestersResult $GetSemestersResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetSemestersResponse
     */
    public function setGetSemestersResult($GetSemestersResult)
    {
      $this->GetSemestersResult = $GetSemestersResult;
      return $this;
    }

}
