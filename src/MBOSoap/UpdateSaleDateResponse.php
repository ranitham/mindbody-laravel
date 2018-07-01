<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateSaleDateResponse
{

    /**
     * @var UpdateSaleDateResult $UpdateSaleDateResult
     */
    public $UpdateSaleDateResult = null;

    /**
     * @param UpdateSaleDateResult $UpdateSaleDateResult
     */
    public function __construct($UpdateSaleDateResult)
    {
      $this->UpdateSaleDateResult = $UpdateSaleDateResult;
    }

    /**
     * @return UpdateSaleDateResult
     */
    public function getUpdateSaleDateResult()
    {
      return $this->UpdateSaleDateResult;
    }

    /**
     * @param UpdateSaleDateResult $UpdateSaleDateResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateSaleDateResponse
     */
    public function setUpdateSaleDateResult($UpdateSaleDateResult)
    {
      $this->UpdateSaleDateResult = $UpdateSaleDateResult;
      return $this;
    }

}
