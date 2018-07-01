<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetWaitlistEntriesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ClassScheduleIDs
     */
    public $ClassScheduleIDs = null;

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var ArrayOfInt $WaitlistEntryIDs
     */
    public $WaitlistEntryIDs = null;

    /**
     * @var ArrayOfInt $ClassIDs
     */
    public $ClassIDs = null;

    /**
     * @var boolean $HidePastEntries
     */
    public $HidePastEntries = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesRequest
     */
    public function setClassScheduleIDs($ClassScheduleIDs)
    {
      $this->ClassScheduleIDs = $ClassScheduleIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getWaitlistEntryIDs()
    {
      return $this->WaitlistEntryIDs;
    }

    /**
     * @param ArrayOfInt $WaitlistEntryIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesRequest
     */
    public function setWaitlistEntryIDs($WaitlistEntryIDs)
    {
      $this->WaitlistEntryIDs = $WaitlistEntryIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesRequest
     */
    public function setClassIDs($ClassIDs)
    {
      $this->ClassIDs = $ClassIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHidePastEntries()
    {
      return $this->HidePastEntries;
    }

    /**
     * @param boolean $HidePastEntries
     * @return \Nlocascio\Mindbody\MBOSoap\GetWaitlistEntriesRequest
     */
    public function setHidePastEntries($HidePastEntries)
    {
      $this->HidePastEntries = $HidePastEntries;
      return $this;
    }

}
