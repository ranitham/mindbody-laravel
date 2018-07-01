<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PurchaseContractsResult extends MBResult
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
     * @var int $ContractID
     */
    public $ContractID = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     * @param int $LocationID
     * @param int $ContractID
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $LocationID, $ContractID)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
      $this->LocationID = $LocationID;
      $this->ContractID = $ContractID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsResult
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
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsResult
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractID()
    {
      return $this->ContractID;
    }

    /**
     * @param int $ContractID
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsResult
     */
    public function setContractID($ContractID)
    {
      $this->ContractID = $ContractID;
      return $this;
    }

}
