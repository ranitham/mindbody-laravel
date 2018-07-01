<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSessionTypesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var boolean $OnlineOnly
     */
    public $OnlineOnly = null;

    /**
     * @param boolean $OnlineOnly
     */
    public function __construct($OnlineOnly)
    {
      parent::__construct();
      $this->OnlineOnly = $OnlineOnly;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetSessionTypesRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlineOnly()
    {
      return $this->OnlineOnly;
    }

    /**
     * @param boolean $OnlineOnly
     * @return \Nlocascio\Mindbody\MBOSoap\GetSessionTypesRequest
     */
    public function setOnlineOnly($OnlineOnly)
    {
      $this->OnlineOnly = $OnlineOnly;
      return $this;
    }

}
