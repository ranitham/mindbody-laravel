<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetRelationships
{

    /**
     * @var GetRelationshipsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetRelationshipsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetRelationshipsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetRelationshipsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetRelationships
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
