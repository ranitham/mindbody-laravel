<?php

namespace Nlocascio\Mindbody\MBOSoap;

class DeleteClientFormulaNote
{

    /**
     * @var DeleteClientFormulaNoteRequest $Request
     */
    public $Request = null;

    /**
     * @param DeleteClientFormulaNoteRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return DeleteClientFormulaNoteRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param DeleteClientFormulaNoteRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\DeleteClientFormulaNote
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
