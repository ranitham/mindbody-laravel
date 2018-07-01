<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddArrival
{

    /**
     * @var AddArrivalRequest $Request
     */
    public $Request = null;

    /**
     * @param AddArrivalRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddArrivalRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddArrivalRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddArrival
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
