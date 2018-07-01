<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Rep extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Rep
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\Rep
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

}
