<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveClientsFromClassesResponse
{

    /**
     * @var RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     */
    public $RemoveClientsFromClassesResult = null;

    /**
     * @param RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     */
    public function __construct($RemoveClientsFromClassesResult)
    {
      $this->RemoveClientsFromClassesResult = $RemoveClientsFromClassesResult;
    }

    /**
     * @return RemoveClientsFromClassesResult
     */
    public function getRemoveClientsFromClassesResult()
    {
      return $this->RemoveClientsFromClassesResult;
    }

    /**
     * @param RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesResponse
     */
    public function setRemoveClientsFromClassesResult($RemoveClientsFromClassesResult)
    {
      $this->RemoveClientsFromClassesResult = $RemoveClientsFromClassesResult;
      return $this;
    }

}
