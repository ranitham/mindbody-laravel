<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SendUserNewPasswordResponse
{

    /**
     * @var ClientSendUserNewPasswordResult $SendUserNewPasswordResult
     */
    public $SendUserNewPasswordResult = null;

    /**
     * @param ClientSendUserNewPasswordResult $SendUserNewPasswordResult
     */
    public function __construct($SendUserNewPasswordResult)
    {
      $this->SendUserNewPasswordResult = $SendUserNewPasswordResult;
    }

    /**
     * @return ClientSendUserNewPasswordResult
     */
    public function getSendUserNewPasswordResult()
    {
      return $this->SendUserNewPasswordResult;
    }

    /**
     * @param ClientSendUserNewPasswordResult $SendUserNewPasswordResult
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPasswordResponse
     */
    public function setSendUserNewPasswordResult($SendUserNewPasswordResult)
    {
      $this->SendUserNewPasswordResult = $SendUserNewPasswordResult;
      return $this;
    }

}
