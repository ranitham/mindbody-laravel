<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetStaffImgURLResponse
{

    /**
     * @var GetStaffImgURLResult $GetStaffImgURLResult
     */
    public $GetStaffImgURLResult = null;

    /**
     * @param GetStaffImgURLResult $GetStaffImgURLResult
     */
    public function __construct($GetStaffImgURLResult)
    {
      $this->GetStaffImgURLResult = $GetStaffImgURLResult;
    }

    /**
     * @return GetStaffImgURLResult
     */
    public function getGetStaffImgURLResult()
    {
      return $this->GetStaffImgURLResult;
    }

    /**
     * @param GetStaffImgURLResult $GetStaffImgURLResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetStaffImgURLResponse
     */
    public function setGetStaffImgURLResult($GetStaffImgURLResult)
    {
      $this->GetStaffImgURLResult = $GetStaffImgURLResult;
      return $this;
    }

}
