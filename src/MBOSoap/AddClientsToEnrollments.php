<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToEnrollments
{

    /**
     * @var AddClientsToEnrollmentsRequest $Request
     */
    public $Request = null;

    /**
     * @param AddClientsToEnrollmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientsToEnrollmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientsToEnrollmentsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToEnrollments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
