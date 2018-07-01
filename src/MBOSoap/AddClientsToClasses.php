<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToClasses
{

    /**
     * @var AddClientsToClassesRequest $Request
     */
    public $Request = null;

    /**
     * @param AddClientsToClassesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientsToClassesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientsToClassesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClasses
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
