<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateStaff
{

    /**
     * @var AddOrUpdateStaffRequest $Request
     */
    public $Request = null;

    /**
     * @param AddOrUpdateStaffRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateStaffRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateStaffRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateStaff
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
