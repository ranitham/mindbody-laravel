<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAppointmentsResponse
{

    /**
     * @var AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     */
    public $AddOrUpdateAppointmentsResult = null;

    /**
     * @param AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     */
    public function __construct($AddOrUpdateAppointmentsResult)
    {
      $this->AddOrUpdateAppointmentsResult = $AddOrUpdateAppointmentsResult;
    }

    /**
     * @return AddOrUpdateAppointmentsResult
     */
    public function getAddOrUpdateAppointmentsResult()
    {
      return $this->AddOrUpdateAppointmentsResult;
    }

    /**
     * @param AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsResponse
     */
    public function setAddOrUpdateAppointmentsResult($AddOrUpdateAppointmentsResult)
    {
      $this->AddOrUpdateAppointmentsResult = $AddOrUpdateAppointmentsResult;
      return $this;
    }

}
