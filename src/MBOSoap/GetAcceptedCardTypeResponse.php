<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetAcceptedCardTypeResponse
{

    /**
     * @var GetAcceptedCardTypeResult $GetAcceptedCardTypeResult
     */
    public $GetAcceptedCardTypeResult = null;

    /**
     * @param GetAcceptedCardTypeResult $GetAcceptedCardTypeResult
     */
    public function __construct($GetAcceptedCardTypeResult)
    {
      $this->GetAcceptedCardTypeResult = $GetAcceptedCardTypeResult;
    }

    /**
     * @return GetAcceptedCardTypeResult
     */
    public function getGetAcceptedCardTypeResult()
    {
      return $this->GetAcceptedCardTypeResult;
    }

    /**
     * @param GetAcceptedCardTypeResult $GetAcceptedCardTypeResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetAcceptedCardTypeResponse
     */
    public function setGetAcceptedCardTypeResult($GetAcceptedCardTypeResult)
    {
      $this->GetAcceptedCardTypeResult = $GetAcceptedCardTypeResult;
      return $this;
    }

}
