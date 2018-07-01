<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetCrossRegionalClientAssociations
{

    /**
     * @var GetCrossRegionalClientAssociationsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetCrossRegionalClientAssociationsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCrossRegionalClientAssociationsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCrossRegionalClientAssociationsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetCrossRegionalClientAssociations
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
