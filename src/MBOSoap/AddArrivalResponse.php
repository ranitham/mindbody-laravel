<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddArrivalResponse
{

    /**
     * @var AddArrivalResult $AddArrivalResult
     */
    public $AddArrivalResult = null;

    /**
     * @param AddArrivalResult $AddArrivalResult
     */
    public function __construct($AddArrivalResult)
    {
      $this->AddArrivalResult = $AddArrivalResult;
    }

    /**
     * @return AddArrivalResult
     */
    public function getAddArrivalResult()
    {
      return $this->AddArrivalResult;
    }

    /**
     * @param AddArrivalResult $AddArrivalResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddArrivalResponse
     */
    public function setAddArrivalResult($AddArrivalResult)
    {
      $this->AddArrivalResult = $AddArrivalResult;
      return $this;
    }

}
