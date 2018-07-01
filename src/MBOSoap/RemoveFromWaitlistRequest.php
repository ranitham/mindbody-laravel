<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveFromWaitlistRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $WaitlistEntryIDs
     */
    public $WaitlistEntryIDs = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveFromWaitlistRequest
     */
    public function setWaitlistEntryIDs($WaitlistEntryIDs)
    {
      $this->WaitlistEntryIDs = $WaitlistEntryIDs;
      return $this;
    }

}
