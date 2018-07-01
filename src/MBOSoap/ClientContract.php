<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientContract extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $ContractName
     */
    public $ContractName = null;

    /**
     * @var int $SiteID
     */
    public $SiteID = null;

    /**
     * @var \Carbon\Carbon $AgreementDate
     */
    public $AgreementDate = null;

    /**
     * @var int $OriginationLocationID
     */
    public $OriginationLocationID = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var EAutopayStatus $AutopayStatus
     */
    public $AutopayStatus = null;

    /**
     * @var ArrayOfUpcomingAutopayEvent $UpcomingAutopayEvents
     */
    public $UpcomingAutopayEvents = null;

    /**
     * @param int $SiteID
     * @param \Carbon\Carbon $AgreementDate
     * @param \Carbon\Carbon $StartDate
     * @param \Carbon\Carbon $EndDate
     * @param EAutopayStatus $AutopayStatus
     */
    public function __construct($SiteID, \Carbon\Carbon $AgreementDate, \Carbon\Carbon $StartDate, \Carbon\Carbon $EndDate, $AutopayStatus)
    {
      parent::__construct();
      $this->SiteID = $SiteID;
      $this->AgreementDate = $AgreementDate->format(\Carbon\Carbon::ATOM);
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      $this->AutopayStatus = $AutopayStatus;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractName()
    {
      return $this->ContractName;
    }

    /**
     * @param string $ContractName
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setContractName($ContractName)
    {
      $this->ContractName = $ContractName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getAgreementDate()
    {
      if ($this->AgreementDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->AgreementDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $AgreementDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setAgreementDate(\Carbon\Carbon $AgreementDate)
    {
      $this->AgreementDate = $AgreementDate->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginationLocationID()
    {
      return $this->OriginationLocationID;
    }

    /**
     * @param int $OriginationLocationID
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setOriginationLocationID($OriginationLocationID)
    {
      $this->OriginationLocationID = $OriginationLocationID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setStartDate(\Carbon\Carbon $StartDate)
    {
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setEndDate(\Carbon\Carbon $EndDate)
    {
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return EAutopayStatus
     */
    public function getAutopayStatus()
    {
      return $this->AutopayStatus;
    }

    /**
     * @param EAutopayStatus $AutopayStatus
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setAutopayStatus($AutopayStatus)
    {
      $this->AutopayStatus = $AutopayStatus;
      return $this;
    }

    /**
     * @return ArrayOfUpcomingAutopayEvent
     */
    public function getUpcomingAutopayEvents()
    {
      return $this->UpcomingAutopayEvents;
    }

    /**
     * @param ArrayOfUpcomingAutopayEvent $UpcomingAutopayEvents
     * @return \Nlocascio\Mindbody\MBOSoap\ClientContract
     */
    public function setUpcomingAutopayEvents($UpcomingAutopayEvents)
    {
      $this->UpcomingAutopayEvents = $UpcomingAutopayEvents;
      return $this;
    }

}
