<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesResponse
{

    /**
     * @var GetSalesResult $GetSalesResult
     */
    public $GetSalesResult = null;

    /**
     * @param GetSalesResult $GetSalesResult
     */
    public function __construct($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
    }

    /**
     * @return GetSalesResult
     */
    public function getGetSalesResult()
    {
      return $this->GetSalesResult;
    }

    /**
     * @param GetSalesResult $GetSalesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesResponse
     */
    public function setGetSalesResult($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
      return $this;
    }

}
