<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UploadClientDocumentResult extends MBResult
{

    /**
     * @var int $FileSize
     */
    public $FileSize = null;

    /**
     * @var string $FileName
     */
    public $FileName = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     * @param int $FileSize
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $FileSize)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
      $this->FileSize = $FileSize;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->FileSize;
    }

    /**
     * @param int $FileSize
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentResult
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UploadClientDocumentResult
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

}
