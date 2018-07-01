<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetActiveClientMembershipsRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveClientMembershipsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetActiveClientMembershipsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
