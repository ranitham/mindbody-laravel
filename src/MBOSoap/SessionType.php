<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SessionType extends MBObject
{

    /**
     * @var int $DefaultTimeLength
     */
    public $DefaultTimeLength = null;

    /**
     * @var int $ProgramID
     */
    public $ProgramID = null;

    /**
     * @var int $NumDeducted
     */
    public $NumDeducted = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var int $SiteID
     */
    public $SiteID = null;

    /**
     * @var boolean $CrossRegionalBookingPerformed
     */
    public $CrossRegionalBookingPerformed = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getDefaultTimeLength()
    {
      return $this->DefaultTimeLength;
    }

    /**
     * @param int $DefaultTimeLength
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setDefaultTimeLength($DefaultTimeLength)
    {
      $this->DefaultTimeLength = $DefaultTimeLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgramID()
    {
      return $this->ProgramID;
    }

    /**
     * @param int $ProgramID
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setProgramID($ProgramID)
    {
      $this->ProgramID = $ProgramID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumDeducted()
    {
      return $this->NumDeducted;
    }

    /**
     * @param int $NumDeducted
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setNumDeducted($NumDeducted)
    {
      $this->NumDeducted = $NumDeducted;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossRegionalBookingPerformed()
    {
      return $this->CrossRegionalBookingPerformed;
    }

    /**
     * @param boolean $CrossRegionalBookingPerformed
     * @return \Nlocascio\Mindbody\MBOSoap\SessionType
     */
    public function setCrossRegionalBookingPerformed($CrossRegionalBookingPerformed)
    {
      $this->CrossRegionalBookingPerformed = $CrossRegionalBookingPerformed;
      return $this;
    }

}
