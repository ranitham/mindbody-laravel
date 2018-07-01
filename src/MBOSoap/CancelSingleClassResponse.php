<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CancelSingleClassResponse
{

    /**
     * @var CancelSingleClassResult $CancelSingleClassResult
     */
    public $CancelSingleClassResult = null;

    /**
     * @param CancelSingleClassResult $CancelSingleClassResult
     */
    public function __construct($CancelSingleClassResult)
    {
      $this->CancelSingleClassResult = $CancelSingleClassResult;
    }

    /**
     * @return CancelSingleClassResult
     */
    public function getCancelSingleClassResult()
    {
      return $this->CancelSingleClassResult;
    }

    /**
     * @param CancelSingleClassResult $CancelSingleClassResult
     * @return \Nlocascio\Mindbody\MBOSoap\CancelSingleClassResponse
     */
    public function setCancelSingleClassResult($CancelSingleClassResult)
    {
      $this->CancelSingleClassResult = $CancelSingleClassResult;
      return $this;
    }

}
