<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffAppointments
{

    /**
     * @var GetStaffAppointmentsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetStaffAppointmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffAppointmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffAppointmentsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
