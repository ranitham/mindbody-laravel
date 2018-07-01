<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateServicesResponse
{

    /**
     * @var UpdateServicesResult $UpdateServicesResult
     */
    public $UpdateServicesResult = null;

    /**
     * @param UpdateServicesResult $UpdateServicesResult
     */
    public function __construct($UpdateServicesResult)
    {
      $this->UpdateServicesResult = $UpdateServicesResult;
    }

    /**
     * @return UpdateServicesResult
     */
    public function getUpdateServicesResult()
    {
      return $this->UpdateServicesResult;
    }

    /**
     * @param UpdateServicesResult $UpdateServicesResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateServicesResponse
     */
    public function setUpdateServicesResult($UpdateServicesResult)
    {
      $this->UpdateServicesResult = $UpdateServicesResult;
      return $this;
    }

}
