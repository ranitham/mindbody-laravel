<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientPhotoResponse
{

    /**
     * @var UploadClientPhotoResult $UploadClientPhotoResult
     */
    public $UploadClientPhotoResult = null;

    /**
     * @param UploadClientPhotoResult $UploadClientPhotoResult
     */
    public function __construct($UploadClientPhotoResult)
    {
      $this->UploadClientPhotoResult = $UploadClientPhotoResult;
    }

    /**
     * @return UploadClientPhotoResult
     */
    public function getUploadClientPhotoResult()
    {
      return $this->UploadClientPhotoResult;
    }

    /**
     * @param UploadClientPhotoResult $UploadClientPhotoResult
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhotoResponse
     */
    public function setUploadClientPhotoResult($UploadClientPhotoResult)
    {
      $this->UploadClientPhotoResult = $UploadClientPhotoResult;
      return $this;
    }

}
