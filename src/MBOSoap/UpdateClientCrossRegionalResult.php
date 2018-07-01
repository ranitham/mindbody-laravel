<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientCrossRegionalResult extends MBResult
{

    /**
     * @var Client $Client
     */
    public $Client = null;

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
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientCrossRegionalResult
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

}
