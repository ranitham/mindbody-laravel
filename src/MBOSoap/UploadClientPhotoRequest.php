<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientPhotoRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var string $Bytes
     */
    public $Bytes = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhotoRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBytes()
    {
      return $this->Bytes;
    }

    /**
     * @param string $Bytes
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientPhotoRequest
     */
    public function setBytes($Bytes)
    {
      $this->Bytes = $Bytes;
      return $this;
    }

}
