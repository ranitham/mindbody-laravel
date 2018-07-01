<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PurchaseContractsResponse
{

    /**
     * @var PurchaseContractsResult $PurchaseContractsResult
     */
    public $PurchaseContractsResult = null;

    /**
     * @param PurchaseContractsResult $PurchaseContractsResult
     */
    public function __construct($PurchaseContractsResult)
    {
      $this->PurchaseContractsResult = $PurchaseContractsResult;
    }

    /**
     * @return PurchaseContractsResult
     */
    public function getPurchaseContractsResult()
    {
      return $this->PurchaseContractsResult;
    }

    /**
     * @param PurchaseContractsResult $PurchaseContractsResult
     * @return \Nlocascio\Mindbody\MBOSoap\PurchaseContractsResponse
     */
    public function setPurchaseContractsResult($PurchaseContractsResult)
    {
      $this->PurchaseContractsResult = $PurchaseContractsResult;
      return $this;
    }

}
