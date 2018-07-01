<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffRequest extends MBRequest
{

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var StaffCredentials $StaffCredentials
     */
    public $StaffCredentials = null;

    /**
     * @var ArrayOfStaffFilter $Filters
     */
    public $Filters = null;

    /**
     * @var int $SessionTypeID
     */
    public $SessionTypeID = null;

    /**
     * @var \Carbon\Carbon $StartDateTime
     */
    public $StartDateTime = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setStaffCredentials($StaffCredentials)
    {
      $this->StaffCredentials = $StaffCredentials;
      return $this;
    }

    /**
     * @return ArrayOfStaffFilter
     */
    public function getFilters()
    {
      return $this->Filters;
    }

    /**
     * @param ArrayOfStaffFilter $Filters
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setFilters($Filters)
    {
      $this->Filters = $Filters;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionTypeID()
    {
      return $this->SessionTypeID;
    }

    /**
     * @param int $SessionTypeID
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setSessionTypeID($SessionTypeID)
    {
      $this->SessionTypeID = $SessionTypeID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
