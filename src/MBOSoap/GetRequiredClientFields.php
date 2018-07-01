<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetRequiredClientFields
{

    /**
     * @var GetRequiredClientFieldsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetRequiredClientFieldsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetRequiredClientFieldsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetRequiredClientFieldsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetRequiredClientFields
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
