<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetGendersRequest extends MBRequest
{

    /**
     * @var boolean $IncludeInactive
     */
    public $IncludeInactive = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIncludeInactive()
    {
      return $this->IncludeInactive;
    }

    /**
     * @param boolean $IncludeInactive
     * @return \Nlocascio\Mindbody\MBOSoap\GetGendersRequest
     */
    public function setIncludeInactive($IncludeInactive)
    {
      $this->IncludeInactive = $IncludeInactive;
      return $this;
    }

}
