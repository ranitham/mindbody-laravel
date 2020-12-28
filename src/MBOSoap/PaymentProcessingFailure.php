<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PaymentProcessingFailure
{

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $Message
     */
    public $Message = null;

    /**
     * @var string $AuthenticationRedirectUrl
     */
    public $AuthenticationRedirectUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Nlocascio\Mindbody\MBOSoap\PaymentProcessingFailure
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Nlocascio\Mindbody\MBOSoap\PaymentProcessingFailure
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationRedirectUrl()
    {
      return $this->AuthenticationRedirectUrl;
    }

    /**
     * @param string $AuthenticationRedirectUrl
     * @return \Nlocascio\Mindbody\MBOSoap\PaymentProcessingFailure
     */
    public function setAuthenticationRedirectUrl($AuthenticationRedirectUrl)
    {
      $this->AuthenticationRedirectUrl = $AuthenticationRedirectUrl;
      return $this;
    }

}
