<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAppointments
{

    /**
     * @var AddOrUpdateAppointmentsRequest $Request
     */
    public $Request = null;

    /**
     * @param AddOrUpdateAppointmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateAppointmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateAppointmentsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
