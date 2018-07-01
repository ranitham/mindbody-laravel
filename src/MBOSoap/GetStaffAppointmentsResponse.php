<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffAppointmentsResponse
{

    /**
     * @var GetStaffAppointmentsResult $GetStaffAppointmentsResult
     */
    public $GetStaffAppointmentsResult = null;

    /**
     * @param GetStaffAppointmentsResult $GetStaffAppointmentsResult
     */
    public function __construct($GetStaffAppointmentsResult)
    {
      $this->GetStaffAppointmentsResult = $GetStaffAppointmentsResult;
    }

    /**
     * @return GetStaffAppointmentsResult
     */
    public function getGetStaffAppointmentsResult()
    {
      return $this->GetStaffAppointmentsResult;
    }

    /**
     * @param GetStaffAppointmentsResult $GetStaffAppointmentsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsResponse
     */
    public function setGetStaffAppointmentsResult($GetStaffAppointmentsResult)
    {
      $this->GetStaffAppointmentsResult = $GetStaffAppointmentsResult;
      return $this;
    }

}
