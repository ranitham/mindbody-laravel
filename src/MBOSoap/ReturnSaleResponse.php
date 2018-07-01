<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReturnSaleResponse
{

    /**
     * @var ReturnSaleResult $ReturnSaleResult
     */
    public $ReturnSaleResult = null;

    /**
     * @param ReturnSaleResult $ReturnSaleResult
     */
    public function __construct($ReturnSaleResult)
    {
      $this->ReturnSaleResult = $ReturnSaleResult;
    }

    /**
     * @return ReturnSaleResult
     */
    public function getReturnSaleResult()
    {
      return $this->ReturnSaleResult;
    }

    /**
     * @param ReturnSaleResult $ReturnSaleResult
     * @return \Nlocascio\Mindbody\MBOSoap\ReturnSaleResponse
     */
    public function setReturnSaleResult($ReturnSaleResult)
    {
      $this->ReturnSaleResult = $ReturnSaleResult;
      return $this;
    }

}
