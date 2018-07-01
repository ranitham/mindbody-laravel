<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateClientsResponse
{

    /**
     * @var AddOrUpdateClientsResult $AddOrUpdateClientsResult
     */
    public $AddOrUpdateClientsResult = null;

    /**
     * @param AddOrUpdateClientsResult $AddOrUpdateClientsResult
     */
    public function __construct($AddOrUpdateClientsResult)
    {
      $this->AddOrUpdateClientsResult = $AddOrUpdateClientsResult;
    }

    /**
     * @return AddOrUpdateClientsResult
     */
    public function getAddOrUpdateClientsResult()
    {
      return $this->AddOrUpdateClientsResult;
    }

    /**
     * @param AddOrUpdateClientsResult $AddOrUpdateClientsResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClientsResponse
     */
    public function setAddOrUpdateClientsResult($AddOrUpdateClientsResult)
    {
      $this->AddOrUpdateClientsResult = $AddOrUpdateClientsResult;
      return $this;
    }

}
