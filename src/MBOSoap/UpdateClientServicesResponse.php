<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientServicesResponse
{

    /**
     * @var UpdateClientServicesResult $UpdateClientServicesResult
     */
    public $UpdateClientServicesResult = null;

    /**
     * @param UpdateClientServicesResult $UpdateClientServicesResult
     */
    public function __construct($UpdateClientServicesResult)
    {
      $this->UpdateClientServicesResult = $UpdateClientServicesResult;
    }

    /**
     * @return UpdateClientServicesResult
     */
    public function getUpdateClientServicesResult()
    {
      return $this->UpdateClientServicesResult;
    }

    /**
     * @param UpdateClientServicesResult $UpdateClientServicesResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientServicesResponse
     */
    public function setUpdateClientServicesResult($UpdateClientServicesResult)
    {
      $this->UpdateClientServicesResult = $UpdateClientServicesResult;
      return $this;
    }

}
