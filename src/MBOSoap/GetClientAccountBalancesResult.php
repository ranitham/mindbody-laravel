<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientAccountBalancesResult extends MBResult
{

    /**
     * @var ArrayOfClient $Clients
     */
    public $Clients = null;

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
     * @return ArrayOfClient
     */
    public function getClients()
    {
      return $this->Clients;
    }

    /**
     * @param ArrayOfClient $Clients
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalancesResult
     */
    public function setClients($Clients)
    {
      $this->Clients = $Clients;
      return $this;
    }

}
