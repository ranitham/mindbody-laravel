<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateServicesRequest extends MBRequest
{

    /**
     * @var ArrayOfService $Services
     */
    public $Services = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfService $Services
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateServicesRequest
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateServicesRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
