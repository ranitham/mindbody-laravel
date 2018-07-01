<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientDocument
{

    /**
     * @var UploadClientDocumentRequest $Request
     */
    public $Request = null;

    /**
     * @param UploadClientDocumentRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UploadClientDocumentRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UploadClientDocumentRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocument
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
