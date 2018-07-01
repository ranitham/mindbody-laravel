<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SubstituteClassTeacherResult extends MBResult
{

    /**
     * @var ClassCustom $Class
     */
    public $Class = null;

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
     * @return ClassCustom
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ClassCustom $Class
     * @return \Nlocascio\Mindbody\MBOSoap\SubstituteClassTeacherResult
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

}
