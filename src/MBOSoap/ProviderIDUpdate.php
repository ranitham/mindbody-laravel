<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ProviderIDUpdate
{

    /**
     * @var string $OldProviderID
     */
    public $OldProviderID = null;

    /**
     * @var string $NewProviderID
     */
    public $NewProviderID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOldProviderID()
    {
      return $this->OldProviderID;
    }

    /**
     * @param string $OldProviderID
     * @return \Nlocascio\Mindbody\MBOSoap\ProviderIDUpdate
     */
    public function setOldProviderID($OldProviderID)
    {
      $this->OldProviderID = $OldProviderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewProviderID()
    {
      return $this->NewProviderID;
    }

    /**
     * @param string $NewProviderID
     * @return \Nlocascio\Mindbody\MBOSoap\ProviderIDUpdate
     */
    public function setNewProviderID($NewProviderID)
    {
      $this->NewProviderID = $NewProviderID;
      return $this;
    }

}
