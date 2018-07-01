<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SendUserNewPassword
{

    /**
     * @var ClientSendUserNewPasswordRequest $Request
     */
    public $Request = null;

    /**
     * @param ClientSendUserNewPasswordRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ClientSendUserNewPasswordRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ClientSendUserNewPasswordRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPassword
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
