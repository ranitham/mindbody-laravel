<?php

namespace Nlocascio\Mindbody\MBOSoap;

class MobileProvider
{

    /**
     * @var int $ProviderID
     */
    public $ProviderID = null;

    /**
     * @var string $ProviderName
     */
    public $ProviderName = null;

    /**
     * @var string $ProviderAddress
     */
    public $ProviderAddress = null;

    /**
     * @var boolean $Active
     */
    public $Active = null;

    /**
     * @param int $ProviderID
     * @param boolean $Active
     */
    public function __construct($ProviderID, $Active)
    {
      $this->ProviderID = $ProviderID;
      $this->Active = $Active;
    }

    /**
     * @return int
     */
    public function getProviderID()
    {
      return $this->ProviderID;
    }

    /**
     * @param int $ProviderID
     * @return \Nlocascio\Mindbody\MBOSoap\MobileProvider
     */
    public function setProviderID($ProviderID)
    {
      $this->ProviderID = $ProviderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderName()
    {
      return $this->ProviderName;
    }

    /**
     * @param string $ProviderName
     * @return \Nlocascio\Mindbody\MBOSoap\MobileProvider
     */
    public function setProviderName($ProviderName)
    {
      $this->ProviderName = $ProviderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderAddress()
    {
      return $this->ProviderAddress;
    }

    /**
     * @param string $ProviderAddress
     * @return \Nlocascio\Mindbody\MBOSoap\MobileProvider
     */
    public function setProviderAddress($ProviderAddress)
    {
      $this->ProviderAddress = $ProviderAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \Nlocascio\Mindbody\MBOSoap\MobileProvider
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
