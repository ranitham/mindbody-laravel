<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateSaleDate
{

    /**
     * @var UpdateSaleDateRequest $Request
     */
    public $Request = null;

    /**
     * @param UpdateSaleDateRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateSaleDateRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateSaleDateRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateSaleDate
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
