<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientFormulaNoteResponse
{

    /**
     * @var AddClientFormulaNoteResult $AddClientFormulaNoteResult
     */
    public $AddClientFormulaNoteResult = null;

    /**
     * @param AddClientFormulaNoteResult $AddClientFormulaNoteResult
     */
    public function __construct($AddClientFormulaNoteResult)
    {
      $this->AddClientFormulaNoteResult = $AddClientFormulaNoteResult;
    }

    /**
     * @return AddClientFormulaNoteResult
     */
    public function getAddClientFormulaNoteResult()
    {
      return $this->AddClientFormulaNoteResult;
    }

    /**
     * @param AddClientFormulaNoteResult $AddClientFormulaNoteResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNoteResponse
     */
    public function setAddClientFormulaNoteResult($AddClientFormulaNoteResult)
    {
      $this->AddClientFormulaNoteResult = $AddClientFormulaNoteResult;
      return $this;
    }

}
