<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProspectStagesResponse
{

    /**
     * @var GetProspectStagesResult $GetProspectStagesResult
     */
    public $GetProspectStagesResult = null;

    /**
     * @param GetProspectStagesResult $GetProspectStagesResult
     */
    public function __construct($GetProspectStagesResult)
    {
      $this->GetProspectStagesResult = $GetProspectStagesResult;
    }

    /**
     * @return GetProspectStagesResult
     */
    public function getGetProspectStagesResult()
    {
      return $this->GetProspectStagesResult;
    }

    /**
     * @param GetProspectStagesResult $GetProspectStagesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetProspectStagesResponse
     */
    public function setGetProspectStagesResult($GetProspectStagesResult)
    {
      $this->GetProspectStagesResult = $GetProspectStagesResult;
      return $this;
    }

}
