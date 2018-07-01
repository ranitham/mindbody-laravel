<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientServicesRequest extends MBRequest
{

    /**
     * @var ArrayOfClientService $ClientServices
     */
    public $ClientServices = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfClientService
     */
    public function getClientServices()
    {
      return $this->ClientServices;
    }

    /**
     * @param ArrayOfClientService $ClientServices
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientServicesRequest
     */
    public function setClientServices($ClientServices)
    {
      $this->ClientServices = $ClientServices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientServicesRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
