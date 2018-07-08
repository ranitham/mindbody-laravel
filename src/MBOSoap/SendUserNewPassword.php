<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SendUserNewPassword
{

    /**
     * @var SendUserNewPasswordRequest $Request
     */
    public $Request = null;

    /**
     * @param SendUserNewPasswordRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return SendUserNewPasswordRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param SendUserNewPasswordRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPassword
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
