<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientCrossRegionalRequest extends MBRequest
{

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientCrossRegionalRequest
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientCrossRegionalRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
