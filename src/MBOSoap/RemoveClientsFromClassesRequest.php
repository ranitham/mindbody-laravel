<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RemoveClientsFromClassesRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var ArrayOfInt $ClassIDs
     */
    public $ClassIDs = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    /**
     * @var boolean $LateCancel
     */
    public $LateCancel = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassIDs()
    {
      return $this->ClassIDs;
    }

    /**
     * @param ArrayOfInt $ClassIDs
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesRequest
     */
    public function setClassIDs($ClassIDs)
    {
      $this->ClassIDs = $ClassIDs;
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
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLateCancel()
    {
      return $this->LateCancel;
    }

    /**
     * @param boolean $LateCancel
     * @return \Nlocascio\Mindbody\MBOSoap\RemoveClientsFromClassesRequest
     */
    public function setLateCancel($LateCancel)
    {
      $this->LateCancel = $LateCancel;
      return $this;
    }

}
