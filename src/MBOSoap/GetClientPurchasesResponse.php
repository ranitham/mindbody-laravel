<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientPurchasesResponse
{

    /**
     * @var GetClientPurchasesResult $GetClientPurchasesResult
     */
    public $GetClientPurchasesResult = null;

    /**
     * @param GetClientPurchasesResult $GetClientPurchasesResult
     */
    public function __construct($GetClientPurchasesResult)
    {
      $this->GetClientPurchasesResult = $GetClientPurchasesResult;
    }

    /**
     * @return GetClientPurchasesResult
     */
    public function getGetClientPurchasesResult()
    {
      return $this->GetClientPurchasesResult;
    }

    /**
     * @param GetClientPurchasesResult $GetClientPurchasesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientPurchasesResponse
     */
    public function setGetClientPurchasesResult($GetClientPurchasesResult)
    {
      $this->GetClientPurchasesResult = $GetClientPurchasesResult;
      return $this;
    }

}
