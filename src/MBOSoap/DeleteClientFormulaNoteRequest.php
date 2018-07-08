<?php

namespace Nlocascio\Mindbody\MBOSoap;

class DeleteClientFormulaNoteRequest extends MBRequest
{

    /**
     * @var int $FormulaNoteID
     */
    public $FormulaNoteID = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @param int $FormulaNoteID
     */
    public function __construct($FormulaNoteID)
    {
      parent::__construct();
      $this->FormulaNoteID = $FormulaNoteID;
    }

    /**
     * @return int
     */
    public function getFormulaNoteID()
    {
      return $this->FormulaNoteID;
    }

    /**
     * @param int $FormulaNoteID
     * @return \Nlocascio\Mindbody\MBOSoap\DeleteClientFormulaNoteRequest
     */
    public function setFormulaNoteID($FormulaNoteID)
    {
      $this->FormulaNoteID = $FormulaNoteID;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\DeleteClientFormulaNoteRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}
