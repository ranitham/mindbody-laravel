<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateClients
{

    /**
     * @var AddOrUpdateClientsRequest $Request
     */
    public $Request = null;

    /**
     * @param AddOrUpdateClientsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateClientsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateClientsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClients
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
