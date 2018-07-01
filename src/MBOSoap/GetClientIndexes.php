<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientIndexes
{

    /**
     * @var GetClientIndexesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientIndexesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientIndexesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientIndexesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientIndexes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
