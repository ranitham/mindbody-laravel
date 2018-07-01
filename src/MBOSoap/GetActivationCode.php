<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActivationCode
{

    /**
     * @var GetActivationCodeRequest $Request
     */
    public $Request = null;

    /**
     * @param GetActivationCodeRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetActivationCodeRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetActivationCodeRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetActivationCode
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
