<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaff
{

    /**
     * @var GetStaffRequest $Request
     */
    public $Request = null;

    /**
     * @param GetStaffRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaff
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
