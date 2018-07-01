<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToClassesRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var ArrayOfInt $ClassIDs
     */
    public $ClassIDs = null;

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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassIDs()
    {
      return $this->ClassIDs;
    }

    /**
     * @param ArrayOfInt $ClassIDs
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
     */
    public function setClassIDs($ClassIDs)
    {
      $this->ClassIDs = $ClassIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesRequest
     */
    public function setClientServiceID($ClientServiceID)
    {
      $this->ClientServiceID = $ClientServiceID;
      return $this;
    }

}
