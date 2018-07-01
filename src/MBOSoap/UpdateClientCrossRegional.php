<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientCrossRegional
{

    /**
     * @var UpdateClientCrossRegionalRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateClientCrossRegionalRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateClientCrossRegionalRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateClientCrossRegionalRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientCrossRegional
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
