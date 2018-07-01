<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ValidateLoginResponse
{

    /**
     * @var ValidateLoginResult $ValidateLoginResult
     */
    public $ValidateLoginResult = null;

    /**
     * @param ValidateLoginResult $ValidateLoginResult
     */
    public function __construct($ValidateLoginResult)
    {
      $this->ValidateLoginResult = $ValidateLoginResult;
    }

    /**
     * @return ValidateLoginResult
     */
    public function getValidateLoginResult()
    {
      return $this->ValidateLoginResult;
    }

    /**
     * @param ValidateLoginResult $ValidateLoginResult
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginResponse
     */
    public function setValidateLoginResult($ValidateLoginResult)
    {
      $this->ValidateLoginResult = $ValidateLoginResult;
      return $this;
    }

}
