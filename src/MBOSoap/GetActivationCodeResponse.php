<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActivationCodeResponse
{

    /**
     * @var GetActivationCodeResult $GetActivationCodeResult
     */
    public $GetActivationCodeResult = null;

    /**
     * @param GetActivationCodeResult $GetActivationCodeResult
     */
    public function __construct($GetActivationCodeResult)
    {
      $this->GetActivationCodeResult = $GetActivationCodeResult;
    }

    /**
     * @return GetActivationCodeResult
     */
    public function getGetActivationCodeResult()
    {
      return $this->GetActivationCodeResult;
    }

    /**
     * @param GetActivationCodeResult $GetActivationCodeResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetActivationCodeResponse
     */
    public function setGetActivationCodeResult($GetActivationCodeResult)
    {
      $this->GetActivationCodeResult = $GetActivationCodeResult;
      return $this;
    }

}
