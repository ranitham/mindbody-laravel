<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ValidateLogin
{

    /**
     * @var ValidateLoginRequest $Request
     */
    public $Request = null;

    /**
     * @param ValidateLoginRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ValidateLoginRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ValidateLoginRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLogin
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
