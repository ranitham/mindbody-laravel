<?php

namespace Nlocascio\Mindbody\MBOSoap;

class DeleteClientFormulaNoteResponse
{

    /**
     * @var DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     */
    public $DeleteClientFormulaNoteResult = null;

    /**
     * @param DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     */
    public function __construct($DeleteClientFormulaNoteResult)
    {
      $this->DeleteClientFormulaNoteResult = $DeleteClientFormulaNoteResult;
    }

    /**
     * @return DeleteClientFormulaNoteResult
     */
    public function getDeleteClientFormulaNoteResult()
    {
      return $this->DeleteClientFormulaNoteResult;
    }

    /**
     * @param DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     * @return \Nlocascio\Mindbody\MBOSoap\DeleteClientFormulaNoteResponse
     */
    public function setDeleteClientFormulaNoteResult($DeleteClientFormulaNoteResult)
    {
      $this->DeleteClientFormulaNoteResult = $DeleteClientFormulaNoteResult;
      return $this;
    }

}
