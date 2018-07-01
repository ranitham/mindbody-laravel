<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientDocumentRequest extends MBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var string $FileName
     */
    public $FileName = null;

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
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentRequest
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentRequest
     */
    public function setBytes($Bytes)
    {
      $this->Bytes = $Bytes;
      return $this;
    }

}
