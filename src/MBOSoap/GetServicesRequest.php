<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetServicesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    public $SessionTypeIDs = null;

    /**
     * @var ArrayOfString $ServiceIDs
     */
    public $ServiceIDs = null;

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    /**
     * @var int $ClassScheduleID
     */
    public $ClassScheduleID = null;

    /**
     * @var boolean $SellOnline
     */
    public $SellOnline = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var boolean $HideRelatedPrograms
     */
    public $HideRelatedPrograms = null;

    /**
     * @var int $StaffID
     */
    public $StaffID = null;

    /**
     * @param int $LocationID
     * @param boolean $HideRelatedPrograms
     */
    public function __construct($LocationID, $HideRelatedPrograms)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
      $this->HideRelatedPrograms = $HideRelatedPrograms;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getServiceIDs()
    {
      return $this->ServiceIDs;
    }

    /**
     * @param ArrayOfString $ServiceIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setServiceIDs($ServiceIDs)
    {
      $this->ServiceIDs = $ServiceIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassScheduleID()
    {
      return $this->ClassScheduleID;
    }

    /**
     * @param int $ClassScheduleID
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setClassScheduleID($ClassScheduleID)
    {
      $this->ClassScheduleID = $ClassScheduleID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellOnline()
    {
      return $this->SellOnline;
    }

    /**
     * @param boolean $SellOnline
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setSellOnline($SellOnline)
    {
      $this->SellOnline = $SellOnline;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideRelatedPrograms()
    {
      return $this->HideRelatedPrograms;
    }

    /**
     * @param boolean $HideRelatedPrograms
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setHideRelatedPrograms($HideRelatedPrograms)
    {
      $this->HideRelatedPrograms = $HideRelatedPrograms;
      return $this;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Nlocascio\Mindbody\MBOSoap\GetServicesRequest
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

}
