<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffResponse
{

    /**
     * @var GetStaffResult $GetStaffResult
     */
    public $GetStaffResult = null;

    /**
     * @param GetStaffResult $GetStaffResult
     */
    public function __construct($GetStaffResult)
    {
      $this->GetStaffResult = $GetStaffResult;
    }

    /**
     * @return GetStaffResult
     */
    public function getGetStaffResult()
    {
      return $this->GetStaffResult;
    }

    /**
     * @param GetStaffResult $GetStaffResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffResponse
     */
    public function setGetStaffResult($GetStaffResult)
    {
      $this->GetStaffResult = $GetStaffResult;
      return $this;
    }

}
