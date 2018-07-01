<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAvailabilitiesResponse
{

    /**
     * @var AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     */
    public $AddOrUpdateAvailabilitiesResult = null;

    /**
     * @param AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     */
    public function __construct($AddOrUpdateAvailabilitiesResult)
    {
      $this->AddOrUpdateAvailabilitiesResult = $AddOrUpdateAvailabilitiesResult;
    }

    /**
     * @return AddOrUpdateAvailabilitiesResult
     */
    public function getAddOrUpdateAvailabilitiesResult()
    {
      return $this->AddOrUpdateAvailabilitiesResult;
    }

    /**
     * @param AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAvailabilitiesResponse
     */
    public function setAddOrUpdateAvailabilitiesResult($AddOrUpdateAvailabilitiesResult)
    {
      $this->AddOrUpdateAvailabilitiesResult = $AddOrUpdateAvailabilitiesResult;
      return $this;
    }

}
