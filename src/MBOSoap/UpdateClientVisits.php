<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientVisits
{

    /**
     * @var UpdateClientVisitsRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateClientVisitsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateClientVisitsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateClientVisitsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientVisits
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
