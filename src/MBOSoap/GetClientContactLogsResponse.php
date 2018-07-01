<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContactLogsResponse
{

    /**
     * @var GetClientContactLogsResult $GetClientContactLogsResult
     */
    public $GetClientContactLogsResult = null;

    /**
     * @param GetClientContactLogsResult $GetClientContactLogsResult
     */
    public function __construct($GetClientContactLogsResult)
    {
      $this->GetClientContactLogsResult = $GetClientContactLogsResult;
    }

    /**
     * @return GetClientContactLogsResult
     */
    public function getGetClientContactLogsResult()
    {
      return $this->GetClientContactLogsResult;
    }

    /**
     * @param GetClientContactLogsResult $GetClientContactLogsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsResponse
     */
    public function setGetClientContactLogsResult($GetClientContactLogsResult)
    {
      $this->GetClientContactLogsResult = $GetClientContactLogsResult;
      return $this;
    }

}
