<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientPhoto
{

    /**
     * @var UploadClientPhotoRequest $Request
     */
    public $Request = null;

    /**
     * @param UploadClientPhotoRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UploadClientPhotoRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UploadClientPhotoRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhoto
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
