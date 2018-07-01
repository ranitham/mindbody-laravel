<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientsToClassesResult extends MBResult
{

    /**
     * @var ArrayOfClass $Classes
     */
    public $Classes = null;

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
     * @return ArrayOfClass
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfClass $Classes
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientsToClassesResult
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
      return $this;
    }

}
