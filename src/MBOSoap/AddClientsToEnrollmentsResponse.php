<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToEnrollmentsResponse
{

    /**
     * @var AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     */
    public $AddClientsToEnrollmentsResult = null;

    /**
     * @param AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     */
    public function __construct($AddClientsToEnrollmentsResult)
    {
      $this->AddClientsToEnrollmentsResult = $AddClientsToEnrollmentsResult;
    }

    /**
     * @return AddClientsToEnrollmentsResult
     */
    public function getAddClientsToEnrollmentsResult()
    {
      return $this->AddClientsToEnrollmentsResult;
    }

    /**
     * @param AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollmentsResponse
     */
    public function setAddClientsToEnrollmentsResult($AddClientsToEnrollmentsResult)
    {
      $this->AddClientsToEnrollmentsResult = $AddClientsToEnrollmentsResult;
      return $this;
    }

}
