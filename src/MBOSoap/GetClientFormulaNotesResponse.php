<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientFormulaNotesResponse
{

    /**
     * @var GetClientFormulaNotesResult $GetClientFormulaNotesResult
     */
    public $GetClientFormulaNotesResult = null;

    /**
     * @param GetClientFormulaNotesResult $GetClientFormulaNotesResult
     */
    public function __construct($GetClientFormulaNotesResult)
    {
      $this->GetClientFormulaNotesResult = $GetClientFormulaNotesResult;
    }

    /**
     * @return GetClientFormulaNotesResult
     */
    public function getGetClientFormulaNotesResult()
    {
      return $this->GetClientFormulaNotesResult;
    }

    /**
     * @param GetClientFormulaNotesResult $GetClientFormulaNotesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientFormulaNotesResponse
     */
    public function setGetClientFormulaNotesResult($GetClientFormulaNotesResult)
    {
      $this->GetClientFormulaNotesResult = $GetClientFormulaNotesResult;
      return $this;
    }

}
