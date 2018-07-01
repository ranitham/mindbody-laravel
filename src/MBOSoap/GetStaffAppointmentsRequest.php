<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffAppointmentsRequest extends MBRequest
{

    /**
     * @var StaffCredentials $StaffCredentials
     */
    public $StaffCredentials = null;

    /**
     * @var ArrayOfInt $AppointmentIDs
     */
    public $AppointmentIDs = null;

    /**
     * @var ArrayOfInt $LocationIDs
     */
    public $LocationIDs = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return StaffCredentials
     */
    public function getStaffCredentials()
    {
      return $this->StaffCredentials;
    }

    /**
     * @param StaffCredentials $StaffCredentials
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setStaffCredentials($StaffCredentials)
    {
      $this->StaffCredentials = $StaffCredentials;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAppointmentIDs()
    {
      return $this->AppointmentIDs;
    }

    /**
     * @param ArrayOfInt $AppointmentIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setAppointmentIDs($AppointmentIDs)
    {
      $this->AppointmentIDs = $AppointmentIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationIDs()
    {
      return $this->LocationIDs;
    }

    /**
     * @param ArrayOfInt $LocationIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setStartDate(\Carbon\Carbon $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setEndDate(\Carbon\Carbon $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getStaffIDs()
    {
      return $this->StaffIDs;
    }

    /**
     * @param ArrayOfLong $StaffIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOfString $ClientIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffAppointmentsRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

}
