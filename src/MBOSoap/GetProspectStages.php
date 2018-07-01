<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProspectStages
{

    /**
     * @var GetProspectStagesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetProspectStagesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetProspectStagesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetProspectStagesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetProspectStages
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
