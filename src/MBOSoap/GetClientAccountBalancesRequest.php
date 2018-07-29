<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientAccountBalancesRequest extends MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    public $ClientIDs = null;

    /**
     * @var \Carbon\Carbon $BalanceDate
     */
    public $BalanceDate = null;

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfString
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOfString $ClientIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalancesRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getBalanceDate()
    {
      if ($this->BalanceDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->BalanceDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $BalanceDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalancesRequest
     */
    public function setBalanceDate(\Carbon\Carbon $BalanceDate = null)
    {
      if ($BalanceDate == null) {
       $this->BalanceDate = null;
      } else {
        $this->BalanceDate = $BalanceDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientAccountBalancesRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

}
