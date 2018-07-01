<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CrossRegionalAssociation
{

    /**
     * @var int $SiteID
     */
    public $SiteID = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $UniqueID
     */
    public $UniqueID = null;

    /**
     * @param int $SiteID
     * @param int $UniqueID
     */
    public function __construct($SiteID, $UniqueID)
    {
      $this->SiteID = $SiteID;
      $this->UniqueID = $UniqueID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CrossRegionalAssociation
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CrossRegionalAssociation
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueID()
    {
      return $this->UniqueID;
    }

    /**
     * @param int $UniqueID
     * @return \Nlocascio\Mindbody\MBOSoap\CrossRegionalAssociation
     */
    public function setUniqueID($UniqueID)
    {
      $this->UniqueID = $UniqueID;
      return $this;
    }

}
