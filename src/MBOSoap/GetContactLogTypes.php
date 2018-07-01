<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetContactLogTypes
{

    /**
     * @var GetContactLogTypesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetContactLogTypesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetContactLogTypesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetContactLogTypesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetContactLogTypes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
