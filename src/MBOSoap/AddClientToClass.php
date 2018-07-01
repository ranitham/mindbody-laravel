<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientToClass
{

    /**
     * @var AddClientToClassRequest $Request
     */
    public $Request = null;

    /**
     * @param AddClientToClassRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientToClassRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientToClassRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientToClass
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
