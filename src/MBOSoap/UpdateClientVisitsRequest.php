<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientVisitsRequest extends MBRequest
{

    /**
     * @var ArrayOfVisit $Visits
     */
    public $Visits = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfVisit
     */
    public function getVisits()
    {
      return $this->Visits;
    }

    /**
     * @param ArrayOfVisit $Visits
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientVisitsRequest
     */
    public function setVisits($Visits)
    {
      $this->Visits = $Visits;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientVisitsRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientVisitsRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

}
