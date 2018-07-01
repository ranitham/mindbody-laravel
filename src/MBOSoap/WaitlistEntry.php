<?php

namespace Nlocascio\Mindbody\MBOSoap;

class WaitlistEntry
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    /**
     * @var \Carbon\Carbon $ClassDate
     */
    public $ClassDate = null;

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var ClassSchedule $ClassSchedule
     */
    public $ClassSchedule = null;

    /**
     * @var \Carbon\Carbon $EnrollmentDateForward
     */
    public $EnrollmentDateForward = null;

    /**
     * @var \Carbon\Carbon $RequestDateTime
     */
    public $RequestDateTime = null;

    /**
     * @var boolean $Web
     */
    public $Web = null;

    /**
     * @var int $VisitRefNo
     */
    public $VisitRefNo = null;

    /**
     * @param int $ID
     * @param int $ClassID
     * @param \Carbon\Carbon $EnrollmentDateForward
     * @param \Carbon\Carbon $RequestDateTime
     * @param boolean $Web
     * @param int $VisitRefNo
     */
    public function __construct($ID, $ClassID, \Carbon\Carbon $EnrollmentDateForward, \Carbon\Carbon $RequestDateTime, $Web, $VisitRefNo)
    {
      $this->ID = $ID;
      $this->ClassID = $ClassID;
      $this->EnrollmentDateForward = $EnrollmentDateForward->format(\Carbon\Carbon::ATOM);
      $this->RequestDateTime = $RequestDateTime->format(\Carbon\Carbon::ATOM);
      $this->Web = $Web;
      $this->VisitRefNo = $VisitRefNo;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getClassDate()
    {
      if ($this->ClassDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->ClassDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $ClassDate
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setClassDate(\Carbon\Carbon $ClassDate = null)
    {
      if ($ClassDate == null) {
       $this->ClassDate = null;
      } else {
        $this->ClassDate = $ClassDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return ClassSchedule
     */
    public function getClassSchedule()
    {
      return $this->ClassSchedule;
    }

    /**
     * @param ClassSchedule $ClassSchedule
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setClassSchedule($ClassSchedule)
    {
      $this->ClassSchedule = $ClassSchedule;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEnrollmentDateForward()
    {
      if ($this->EnrollmentDateForward == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EnrollmentDateForward);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EnrollmentDateForward
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setEnrollmentDateForward(\Carbon\Carbon $EnrollmentDateForward)
    {
      $this->EnrollmentDateForward = $EnrollmentDateForward->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getRequestDateTime()
    {
      if ($this->RequestDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->RequestDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $RequestDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setRequestDateTime(\Carbon\Carbon $RequestDateTime)
    {
      $this->RequestDateTime = $RequestDateTime->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param boolean $Web
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

    /**
     * @return int
     */
    public function getVisitRefNo()
    {
      return $this->VisitRefNo;
    }

    /**
     * @param int $VisitRefNo
     * @return \Nlocascio\Mindbody\MBOSoap\WaitlistEntry
     */
    public function setVisitRefNo($VisitRefNo)
    {
      $this->VisitRefNo = $VisitRefNo;
      return $this;
    }

}
