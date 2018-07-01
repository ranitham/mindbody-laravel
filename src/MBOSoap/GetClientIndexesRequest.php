<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientIndexesRequest extends MBRequest
{

    /**
     * @var boolean $RequiredOnly
     */
    public $RequiredOnly = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getRequiredOnly()
    {
      return $this->RequiredOnly;
    }

    /**
     * @param boolean $RequiredOnly
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientIndexesRequest
     */
    public function setRequiredOnly($RequiredOnly)
    {
      $this->RequiredOnly = $RequiredOnly;
      return $this;
    }

}
