<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClients
{

    /**
     * @var GetClientsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClients
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
