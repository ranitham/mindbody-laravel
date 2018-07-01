<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateAppointmentsRequest extends MBRequest
{

    /**
     * @var string $UpdateAction
     */
    public $UpdateAction = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    /**
     * @var boolean $ApplyPayment
     */
    public $ApplyPayment = null;

    /**
     * @var ArrayOfAppointment $Appointments
     */
    public $Appointments = null;

    /**
     * @var boolean $IgnoreDefaultSessionLength
     */
    public $IgnoreDefaultSessionLength = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUpdateAction()
    {
      return $this->UpdateAction;
    }

    /**
     * @param string $UpdateAction
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setUpdateAction($UpdateAction)
    {
      $this->UpdateAction = $UpdateAction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyPayment()
    {
      return $this->ApplyPayment;
    }

    /**
     * @param boolean $ApplyPayment
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setApplyPayment($ApplyPayment)
    {
      $this->ApplyPayment = $ApplyPayment;
      return $this;
    }

    /**
     * @return ArrayOfAppointment
     */
    public function getAppointments()
    {
      return $this->Appointments;
    }

    /**
     * @param ArrayOfAppointment $Appointments
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setAppointments($Appointments)
    {
      $this->Appointments = $Appointments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreDefaultSessionLength()
    {
      return $this->IgnoreDefaultSessionLength;
    }

    /**
     * @param boolean $IgnoreDefaultSessionLength
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateAppointmentsRequest
     */
    public function setIgnoreDefaultSessionLength($IgnoreDefaultSessionLength)
    {
      $this->IgnoreDefaultSessionLength = $IgnoreDefaultSessionLength;
      return $this;
    }

}
