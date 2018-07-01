<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetGendersResult extends MBResult
{

    /**
     * @var ArrayOfGenderOption $GenderOptions
     */
    public $GenderOptions = null;

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
     * @return ArrayOfGenderOption
     */
    public function getGenderOptions()
    {
      return $this->GenderOptions;
    }

    /**
     * @param ArrayOfGenderOption $GenderOptions
     * @return \Nlocascio\Mindbody\MBOSoap\GetGendersResult
     */
    public function setGenderOptions($GenderOptions)
    {
      $this->GenderOptions = $GenderOptions;
      return $this;
    }

}
