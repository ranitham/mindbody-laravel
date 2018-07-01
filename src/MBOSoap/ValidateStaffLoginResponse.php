<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ValidateStaffLoginResponse
{

    /**
     * @var ValidateLoginResult $ValidateStaffLoginResult
     */
    public $ValidateStaffLoginResult = null;

    /**
     * @param ValidateLoginResult $ValidateStaffLoginResult
     */
    public function __construct($ValidateStaffLoginResult)
    {
      $this->ValidateStaffLoginResult = $ValidateStaffLoginResult;
    }

    /**
     * @return ValidateLoginResult
     */
    public function getValidateStaffLoginResult()
    {
      return $this->ValidateStaffLoginResult;
    }

    /**
     * @param ValidateLoginResult $ValidateStaffLoginResult
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateStaffLoginResponse
     */
    public function setValidateStaffLoginResult($ValidateStaffLoginResult)
    {
      $this->ValidateStaffLoginResult = $ValidateStaffLoginResult;
      return $this;
    }

}
