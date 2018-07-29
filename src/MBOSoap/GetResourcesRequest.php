<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResourcesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    public $SessionTypeIDs = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var \Carbon\Carbon $EndDateTime
     */
    public $EndDateTime = null;

    /**
     * @param int $LocationID
     * @param \Carbon\Carbon $StartDateTime
     * @param \Carbon\Carbon $EndDateTime
     */
    public function __construct($LocationID, \Carbon\Carbon $StartDateTime, \Carbon\Carbon $EndDateTime)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
      $this->StartDateTime = $StartDateTime->format("Y-m-d\TH:i:s");
      $this->EndDateTime = $EndDateTime->format("Y-m-d\TH:i:s");
    }

    /**
     * @return ArrayOfInt
     */
    public function getSessionTypeIDs()
    {
      return $this->SessionTypeIDs;
    }

    /**
     * @param ArrayOfInt $SessionTypeIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourcesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourcesRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourcesRequest
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime)
    {
      $this->StartDateTime = $StartDateTime->format("Y-m-d\TH:i:s");
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourcesRequest
     */
    public function setEndDateTime(\Carbon\Carbon $EndDateTime)
    {
      $this->EndDateTime = $EndDateTime->format("Y-m-d\TH:i:s");
      return $this;
    }

}
