<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientsResponse
{

    /**
     * @var GetClientsResult $GetClientsResult
     */
    public $GetClientsResult = null;

    /**
     * @param GetClientsResult $GetClientsResult
     */
    public function __construct($GetClientsResult)
    {
      $this->GetClientsResult = $GetClientsResult;
    }

    /**
     * @return GetClientsResult
     */
    public function getGetClientsResult()
    {
      return $this->GetClientsResult;
    }

    /**
     * @param GetClientsResult $GetClientsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientsResponse
     */
    public function setGetClientsResult($GetClientsResult)
    {
      $this->GetClientsResult = $GetClientsResult;
      return $this;
    }

}
