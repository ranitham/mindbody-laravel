<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PurchasedItem
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var boolean $IsService
     */
    public $IsService = null;

    /**
     * @param int $ID
     * @param boolean $IsService
     */
    public function __construct($ID, $IsService)
    {
      $this->ID = $ID;
      $this->IsService = $IsService;
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
     * @return \Nlocascio\Mindbody\MBOSoap\PurchasedItem
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsService()
    {
      return $this->IsService;
    }

    /**
     * @param boolean $IsService
     * @return \Nlocascio\Mindbody\MBOSoap\PurchasedItem
     */
    public function setIsService($IsService)
    {
      $this->IsService = $IsService;
      return $this;
    }

}
