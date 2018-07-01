<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProspectStagesRequest extends MBRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetProspectStagesRequest
     */
    public function setIncludeInactive($IncludeInactive)
    {
      $this->IncludeInactive = $IncludeInactive;
      return $this;
    }

}
