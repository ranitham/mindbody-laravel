<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToClassesResponse
{

    /**
     * @var AddClientsToClassesResult $AddClientsToClassesResult
     */
    public $AddClientsToClassesResult = null;

    /**
     * @param AddClientsToClassesResult $AddClientsToClassesResult
     */
    public function __construct($AddClientsToClassesResult)
    {
      $this->AddClientsToClassesResult = $AddClientsToClassesResult;
    }

    /**
     * @return AddClientsToClassesResult
     */
    public function getAddClientsToClassesResult()
    {
      return $this->AddClientsToClassesResult;
    }

    /**
     * @param AddClientsToClassesResult $AddClientsToClassesResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesResponse
     */
    public function setAddClientsToClassesResult($AddClientsToClassesResult)
    {
      $this->AddClientsToClassesResult = $AddClientsToClassesResult;
      return $this;
    }

}
