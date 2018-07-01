<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CancelSingleClass
{

    /**
     * @var CancelSingleClassRequest $Request
     */
    public $Request = null;

    /**
     * @param CancelSingleClassRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return CancelSingleClassRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param CancelSingleClassRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\CancelSingleClass
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
