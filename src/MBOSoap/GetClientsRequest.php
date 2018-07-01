<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientsRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var string $SearchText
     */
    public $SearchText = null;

    /**
     * @var boolean $IsProspect
     */
    public $IsProspect = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDate
     */
    public $LastModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfString
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOfString $ClientIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientsRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientsRequest
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect()
    {
      return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientsRequest
     */
    public function setIsProspect($IsProspect)
    {
      $this->IsProspect = $IsProspect;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastModifiedDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastModifiedDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientsRequest
     */
    public function setLastModifiedDate(\Carbon\Carbon $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

}
