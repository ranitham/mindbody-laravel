<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SalesRep extends MBObject
{

    /**
     * @var int $SalesRepNumber
     */
    public $SalesRepNumber = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $FirstName
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     */
    public $LastName = null;

    /**
     * @var ArrayOfInt $SalesRepNumbers
     */
    public $SalesRepNumbers = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getSalesRepNumber()
    {
      return $this->SalesRepNumber;
    }

    /**
     * @param int $SalesRepNumber
     * @return \Nlocascio\Mindbody\MBOSoap\SalesRep
     */
    public function setSalesRepNumber($SalesRepNumber)
    {
      $this->SalesRepNumber = $SalesRepNumber;
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
     * @return \Nlocascio\Mindbody\MBOSoap\SalesRep
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Nlocascio\Mindbody\MBOSoap\SalesRep
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Nlocascio\Mindbody\MBOSoap\SalesRep
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSalesRepNumbers()
    {
      return $this->SalesRepNumbers;
    }

    /**
     * @param ArrayOfInt $SalesRepNumbers
     * @return \Nlocascio\Mindbody\MBOSoap\SalesRep
     */
    public function setSalesRepNumbers($SalesRepNumbers)
    {
      $this->SalesRepNumbers = $SalesRepNumbers;
      return $this;
    }

}
