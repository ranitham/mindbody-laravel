<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateClientsRequest extends MBRequest
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
     * @var ArrayOfClient $Clients
     */
    public $Clients = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClientsRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClientsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return ArrayOfClient
     */
    public function getClients()
    {
      return $this->Clients;
    }

    /**
     * @param ArrayOfClient $Clients
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClientsRequest
     */
    public function setClients($Clients)
    {
      $this->Clients = $Clients;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateClientsRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

}
