<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSales
{

    /**
     * @var GetSalesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetSalesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSalesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSalesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetSales
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
