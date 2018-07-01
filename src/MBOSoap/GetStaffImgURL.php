<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffImgURL
{

    /**
     * @var GetStaffImgURLRequest $Request
     */
    public $Request = null;

    /**
     * @param GetStaffImgURLRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffImgURLRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffImgURLRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffImgURL
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
