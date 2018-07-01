<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientToClassResponse
{

    /**
     * @var AddClientsToClassesResult $AddClientToClassResult
     */
    public $AddClientToClassResult = null;

    /**
     * @param AddClientsToClassesResult $AddClientToClassResult
     */
    public function __construct($AddClientToClassResult)
    {
      $this->AddClientToClassResult = $AddClientToClassResult;
    }

    /**
     * @return AddClientsToClassesResult
     */
    public function getAddClientToClassResult()
    {
      return $this->AddClientToClassResult;
    }

    /**
     * @param AddClientsToClassesResult $AddClientToClassResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClassResponse
     */
    public function setAddClientToClassResult($AddClientToClassResult)
    {
      $this->AddClientToClassResult = $AddClientToClassResult;
      return $this;
    }

}
