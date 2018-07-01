<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientDocumentResponse
{

    /**
     * @var UploadClientDocumentResult $UploadClientDocumentResult
     */
    public $UploadClientDocumentResult = null;

    /**
     * @param UploadClientDocumentResult $UploadClientDocumentResult
     */
    public function __construct($UploadClientDocumentResult)
    {
      $this->UploadClientDocumentResult = $UploadClientDocumentResult;
    }

    /**
     * @return UploadClientDocumentResult
     */
    public function getUploadClientDocumentResult()
    {
      return $this->UploadClientDocumentResult;
    }

    /**
     * @param UploadClientDocumentResult $UploadClientDocumentResult
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentResponse
     */
    public function setUploadClientDocumentResult($UploadClientDocumentResult)
    {
      $this->UploadClientDocumentResult = $UploadClientDocumentResult;
      return $this;
    }

}
