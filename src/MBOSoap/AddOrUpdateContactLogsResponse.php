<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateContactLogsResponse
{

    /**
     * @var AddOrUpdateContactLogsResult $AddOrUpdateContactLogsResult
     */
    public $AddOrUpdateContactLogsResult = null;

    /**
     * @param AddOrUpdateContactLogsResult $AddOrUpdateContactLogsResult
     */
    public function __construct($AddOrUpdateContactLogsResult)
    {
      $this->AddOrUpdateContactLogsResult = $AddOrUpdateContactLogsResult;
    }

    /**
     * @return AddOrUpdateContactLogsResult
     */
    public function getAddOrUpdateContactLogsResult()
    {
      return $this->AddOrUpdateContactLogsResult;
    }

    /**
     * @param AddOrUpdateContactLogsResult $AddOrUpdateContactLogsResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateContactLogsResponse
     */
    public function setAddOrUpdateContactLogsResult($AddOrUpdateContactLogsResult)
    {
      $this->AddOrUpdateContactLogsResult = $AddOrUpdateContactLogsResult;
      return $this;
    }

}
