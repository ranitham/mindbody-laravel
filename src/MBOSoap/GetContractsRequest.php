<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContractsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ContractIDs
     */
    public $ContractIDs = null;

    /**
     * @var boolean $SoldOnline
     */
    public $SoldOnline = null;

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
     * @return ArrayOfInt
     */
    public function getContractIDs()
    {
      return $this->ContractIDs;
    }

    /**
     * @param ArrayOfInt $ContractIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetContractsRequest
     */
    public function setContractIDs($ContractIDs)
    {
      $this->ContractIDs = $ContractIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOnline()
    {
      return $this->SoldOnline;
    }

    /**
     * @param boolean $SoldOnline
     * @return \Nlocascio\Mindbody\MBOSoap\GetContractsRequest
     */
    public function setSoldOnline($SoldOnline)
    {
      $this->SoldOnline = $SoldOnline;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetContractsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
