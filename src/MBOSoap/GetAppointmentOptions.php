<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetAppointmentOptions
{

    /**
     * @var GetAppointmentOptionsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetAppointmentOptionsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetAppointmentOptionsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetAppointmentOptionsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetAppointmentOptions
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
