<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientService extends MBObject
{

    /**
     * @var boolean $Current
     */
    public $Current = null;

    /**
     * @var int $Count
     */
    public $Count = null;

    /**
     * @var int $Remaining
     */
    public $Remaining = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var \Carbon\Carbon $PaymentDate
     */
    public $PaymentDate = null;

    /**
     * @var \Carbon\Carbon $ActiveDate
     */
    public $ActiveDate = null;

    /**
     * @var \Carbon\Carbon $ExpirationDate
     */
    public $ExpirationDate = null;

    /**
     * @var Program $Program
     */
    public $Program = null;

    /**
     * @var int $SiteID
     */
    public $SiteID = null;

    /**
     * @param boolean $Current
     * @param int $Count
     * @param int $Remaining
     */
    public function __construct($Current, $Count, $Remaining)
    {
      parent::__construct();
      $this->Current = $Current;
      $this->Count = $Count;
      $this->Remaining = $Remaining;
    }

    /**
     * @return boolean
     */
    public function getCurrent()
    {
      return $this->Current;
    }

    /**
     * @param boolean $Current
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setCurrent($Current)
    {
      $this->Current = $Current;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

    /**
     * @return int
     */
    public function getRemaining()
    {
      return $this->Remaining;
    }

    /**
     * @param int $Remaining
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setRemaining($Remaining)
    {
      $this->Remaining = $Remaining;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getPaymentDate()
    {
      if ($this->PaymentDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->PaymentDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $PaymentDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setPaymentDate(\Carbon\Carbon $PaymentDate = null)
    {
      if ($PaymentDate == null) {
       $this->PaymentDate = null;
      } else {
        $this->PaymentDate = $PaymentDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getActiveDate()
    {
      if ($this->ActiveDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->ActiveDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $ActiveDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setActiveDate(\Carbon\Carbon $ActiveDate = null)
    {
      if ($ActiveDate == null) {
       $this->ActiveDate = null;
      } else {
        $this->ActiveDate = $ActiveDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->ExpirationDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $ExpirationDate
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setExpirationDate(\Carbon\Carbon $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return Program
     */
    public function getProgram()
    {
      return $this->Program;
    }

    /**
     * @param Program $Program
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setProgram($Program)
    {
      $this->Program = $Program;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ClientService
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

}
