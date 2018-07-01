<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddArrivalRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @param int $LocationID
     */
    public function __construct($LocationID)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddArrivalRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddArrivalRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
