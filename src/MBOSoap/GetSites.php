<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSites
{

    /**
     * @var GetSitesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetSitesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSitesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSitesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetSites
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
