<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientCrossRegionalResponse
{

    /**
     * @var UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     */
    public $UpdateClientCrossRegionalResult = null;

    /**
     * @param UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     */
    public function __construct($UpdateClientCrossRegionalResult)
    {
      $this->UpdateClientCrossRegionalResult = $UpdateClientCrossRegionalResult;
    }

    /**
     * @return UpdateClientCrossRegionalResult
     */
    public function getUpdateClientCrossRegionalResult()
    {
      return $this->UpdateClientCrossRegionalResult;
    }

    /**
     * @param UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientCrossRegionalResponse
     */
    public function setUpdateClientCrossRegionalResult($UpdateClientCrossRegionalResult)
    {
      $this->UpdateClientCrossRegionalResult = $UpdateClientCrossRegionalResult;
      return $this;
    }

}
