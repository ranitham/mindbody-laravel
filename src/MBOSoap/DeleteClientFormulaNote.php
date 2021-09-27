<?php

namespace Nlocascio\Mindbody\MBOSoap;

class DeleteClientFormulaNote
{

    /**
     * @var DeleteCientFormulaNoteRequest $Request
     */
    public $Request = null;

    /**
     * @param DeleteCientFormulaNoteRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return DeleteCientFormulaNoteRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param DeleteCientFormulaNoteRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\DeleteClientFormulaNote
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
