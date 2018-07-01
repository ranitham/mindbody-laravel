<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetGenders
{

    /**
     * @var GetGendersRequest $Request
     */
    public $Request = null;

    /**
     * @param GetGendersRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetGendersRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetGendersRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetGenders
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
