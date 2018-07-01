<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCustomClientFields
{

    /**
     * @var GetCustomClientFieldsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetCustomClientFieldsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCustomClientFieldsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCustomClientFieldsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetCustomClientFields
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
