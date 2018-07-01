<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientToClassRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var boolean $RequirePayment
     */
    public $RequirePayment = null;

    /**
     * @var boolean $Waitlist
     */
    public $Waitlist = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    /**
     * @var int $WaitlistEntryID
     */
    public $WaitlistEntryID = null;

    /**
     * @var int $ClientServiceID
     */
    public $ClientServiceID = null;

    /**
     * @var boolean $CrossRegionalBooking
     */
    public $CrossRegionalBooking = null;

    /**
     * @var int $CrossRegionalBookingClientServiceSiteId
     */
    public $CrossRegionalBookingClientServiceSiteId = null;

    /**
     * @param int $ClassID
     * @param boolean $CrossRegionalBooking
     */
    public function __construct($ClassID, $CrossRegionalBooking)
    {
      parent::__construct();
      $this->ClassID = $ClassID;
      $this->CrossRegionalBooking = $CrossRegionalBooking;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirePayment()
    {
      return $this->RequirePayment;
    }

    /**
     * @param boolean $RequirePayment
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setRequirePayment($RequirePayment)
    {
      $this->RequirePayment = $RequirePayment;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setWaitlist($Waitlist)
    {
      $this->Waitlist = $Waitlist;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setWaitlistEntryID($WaitlistEntryID)
    {
      $this->WaitlistEntryID = $WaitlistEntryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientServiceID()
    {
      return $this->ClientServiceID;
    }

    /**
     * @param int $ClientServiceID
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setClientServiceID($ClientServiceID)
    {
      $this->ClientServiceID = $ClientServiceID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossRegionalBooking()
    {
      return $this->CrossRegionalBooking;
    }

    /**
     * @param boolean $CrossRegionalBooking
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setCrossRegionalBooking($CrossRegionalBooking)
    {
      $this->CrossRegionalBooking = $CrossRegionalBooking;
      return $this;
    }

    /**
     * @return int
     */
    public function getCrossRegionalBookingClientServiceSiteId()
    {
      return $this->CrossRegionalBookingClientServiceSiteId;
    }

    /**
     * @param int $CrossRegionalBookingClientServiceSiteId
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassRequest
     */
    public function setCrossRegionalBookingClientServiceSiteId($CrossRegionalBookingClientServiceSiteId)
    {
      $this->CrossRegionalBookingClientServiceSiteId = $CrossRegionalBookingClientServiceSiteId;
      return $this;
    }

}
