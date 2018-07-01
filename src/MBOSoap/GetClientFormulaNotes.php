<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientFormulaNotes
{

    /**
     * @var GetClientFormulaNotesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientFormulaNotesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientFormulaNotesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientFormulaNotesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientFormulaNotes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
