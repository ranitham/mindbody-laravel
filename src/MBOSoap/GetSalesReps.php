<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesReps
{

    /**
     * @var GetSalesRepsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetSalesRepsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSalesRepsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSalesRepsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesReps
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
