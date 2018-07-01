<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSemesters
{

    /**
     * @var GetSemestersRequest $Request
     */
    public $Request = null;

    /**
     * @param GetSemestersRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSemestersRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSemestersRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetSemesters
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
