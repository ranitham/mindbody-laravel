<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetProgramsResult extends MBResult
{

    /**
     * @var ArrayOfProgram $Programs
     */
    public $Programs = null;

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
     * @return ArrayOfProgram
     */
    public function getPrograms()
    {
      return $this->Programs;
    }

    /**
     * @param ArrayOfProgram $Programs
     * @return \Nlocascio\Mindbody\MBOSoap\GetProgramsResult
     */
    public function setPrograms($Programs)
    {
      $this->Programs = $Programs;
      return $this;
    }

}
