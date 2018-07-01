<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToEnrollmentsRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var ArrayOfInt $ClassScheduleIDs
     */
    public $ClassScheduleIDs = null;

    /**
     * @var ArrayOfInt $CourseIDs
     */
    public $CourseIDs = null;

    /**
     * @var \Carbon\Carbon $EnrollDateForward
     */
    public $EnrollDateForward = null;

    /**
     * @var ArrayOfDateTime $EnrollOpen
     */
    public $EnrollOpen = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    /**
     * @var boolean $Waitlist
     */
    public $Waitlist = null;

    /**
     * @var int $WaitlistEntryID
     */
    public $WaitlistEntryID = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassScheduleIDs()
    {
      return $this->ClassScheduleIDs;
    }

    /**
     * @param ArrayOfInt $ClassScheduleIDs
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setClassScheduleIDs($ClassScheduleIDs)
    {
      $this->ClassScheduleIDs = $ClassScheduleIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCourseIDs()
    {
      return $this->CourseIDs;
    }

    /**
     * @param ArrayOfInt $CourseIDs
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setCourseIDs($CourseIDs)
    {
      $this->CourseIDs = $CourseIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEnrollDateForward()
    {
      if ($this->EnrollDateForward == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EnrollDateForward);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EnrollDateForward
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setEnrollDateForward(\Carbon\Carbon $EnrollDateForward = null)
    {
      if ($EnrollDateForward == null) {
       $this->EnrollDateForward = null;
      } else {
        $this->EnrollDateForward = $EnrollDateForward->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfDateTime
     */
    public function getEnrollOpen()
    {
      return $this->EnrollOpen;
    }

    /**
     * @param ArrayOfDateTime $EnrollOpen
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setEnrollOpen($EnrollOpen)
    {
      $this->EnrollOpen = $EnrollOpen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWaitlist()
    {
      return $this->Waitlist;
    }

    /**
     * @param boolean $Waitlist
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setWaitlist($Waitlist)
    {
      $this->Waitlist = $Waitlist;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaitlistEntryID()
    {
      return $this->WaitlistEntryID;
    }

    /**
     * @param int $WaitlistEntryID
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsRequest
     */
    public function setWaitlistEntryID($WaitlistEntryID)
    {
      $this->WaitlistEntryID = $WaitlistEntryID;
      return $this;
    }

}
