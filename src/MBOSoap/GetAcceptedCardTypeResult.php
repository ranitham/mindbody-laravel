<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetAcceptedCardTypeResult extends MBResult
{

    /**
     * @var ArrayOfString $CardTypes
     */
    public $CardTypes = null;

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
     * @return ArrayOfString
     */
    public function getCardTypes()
    {
      return $this->CardTypes;
    }

    /**
     * @param ArrayOfString $CardTypes
     * @return \Nlocascio\Mindbody\MBOSoap\GetAcceptedCardTypeResult
     */
    public function setCardTypes($CardTypes)
    {
      $this->CardTypes = $CardTypes;
      return $this;
    }

}
