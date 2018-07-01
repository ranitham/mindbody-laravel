<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContactLogsResult extends MBResult
{

    /**
     * @var ArrayOfContactLog $ContactLogs
     */
    public $ContactLogs = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfContactLog
     */
    public function getContactLogs()
    {
      return $this->ContactLogs;
    }

    /**
     * @param ArrayOfContactLog $ContactLogs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContactLogsResult
     */
    public function setContactLogs($ContactLogs)
    {
      $this->ContactLogs = $ContactLogs;
      return $this;
    }

}
