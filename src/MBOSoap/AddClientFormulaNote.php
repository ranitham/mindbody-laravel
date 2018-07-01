<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientFormulaNote
{

    /**
     * @var AddClientFormulaNoteRequest $Request
     */
    public $Request = null;

    /**
     * @param AddClientFormulaNoteRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientFormulaNoteRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientFormulaNoteRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNote
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
