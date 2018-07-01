<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetAppointmentOptionsResponse
{

    /**
     * @var GetAppointmentOptionsResult $GetAppointmentOptionsResult
     */
    public $GetAppointmentOptionsResult = null;

    /**
     * @param GetAppointmentOptionsResult $GetAppointmentOptionsResult
     */
    public function __construct($GetAppointmentOptionsResult)
    {
      $this->GetAppointmentOptionsResult = $GetAppointmentOptionsResult;
    }

    /**
     * @return GetAppointmentOptionsResult
     */
    public function getGetAppointmentOptionsResult()
    {
      return $this->GetAppointmentOptionsResult;
    }

    /**
     * @param GetAppointmentOptionsResult $GetAppointmentOptionsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetAppointmentOptionsResponse
     */
    public function setGetAppointmentOptionsResult($GetAppointmentOptionsResult)
    {
      $this->GetAppointmentOptionsResult = $GetAppointmentOptionsResult;
      return $this;
    }

}
