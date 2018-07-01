<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetEnrollments
{

    /**
     * @var GetEnrollmentsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetEnrollmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetEnrollmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetEnrollmentsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
