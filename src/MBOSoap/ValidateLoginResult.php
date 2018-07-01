<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ValidateLoginResult extends MBResult
{

    /**
     * @var string $GUID
     */
    public $GUID = null;

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var Staff $Staff
     */
    public $Staff = null;

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
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginResult
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginResult
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginResult
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

}
