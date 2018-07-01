<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Tip extends Item
{

    /**
     * @var float $Amount
     */
    public $Amount = null;

    /**
     * @var int $StaffID
     */
    public $StaffID = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Nlocascio\Mindbody\MBOSoap\Tip
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Tip
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

}
