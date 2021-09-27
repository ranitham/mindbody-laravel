<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCrossRegionalClientAssociationsRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var string $Email
     */
    public $Email = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetCrossRegionalClientAssociationsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Nlocascio\Mindbody\MBOSoap\GetCrossRegionalClientAssociationsRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}
