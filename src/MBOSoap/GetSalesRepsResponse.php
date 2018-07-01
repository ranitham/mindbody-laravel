<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesRepsResponse
{

    /**
     * @var GetSalesRepsResult $GetSalesRepsResult
     */
    public $GetSalesRepsResult = null;

    /**
     * @param GetSalesRepsResult $GetSalesRepsResult
     */
    public function __construct($GetSalesRepsResult)
    {
      $this->GetSalesRepsResult = $GetSalesRepsResult;
    }

    /**
     * @return GetSalesRepsResult
     */
    public function getGetSalesRepsResult()
    {
      return $this->GetSalesRepsResult;
    }

    /**
     * @param GetSalesRepsResult $GetSalesRepsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRepsResponse
     */
    public function setGetSalesRepsResult($GetSalesRepsResult)
    {
      $this->GetSalesRepsResult = $GetSalesRepsResult;
      return $this;
    }

}
