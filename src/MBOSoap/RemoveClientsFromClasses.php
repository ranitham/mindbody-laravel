<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveClientsFromClasses
{

    /**
     * @var RemoveClientsFromClassesRequest $Request
     */
    public $Request = null;

    /**
     * @param RemoveClientsFromClassesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return RemoveClientsFromClassesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RemoveClientsFromClassesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClasses
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
