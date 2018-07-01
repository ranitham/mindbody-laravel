<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Liability
{

    /**
     * @var boolean $IsReleased
     */
    public $IsReleased = null;

    /**
     * @var \Carbon\Carbon $AgreementDate
     */
    public $AgreementDate = null;

    /**
     * @var int $ReleasedBy
     */
    public $ReleasedBy = null;

    /**
     * @param boolean $IsReleased
     */
    public function __construct($IsReleased)
    {
      $this->IsReleased = $IsReleased;
    }

    /**
     * @return boolean
     */
    public function getIsReleased()
    {
      return $this->IsReleased;
    }

    /**
     * @param boolean $IsReleased
     * @return \Nlocascio\Mindbody\MBOSoap\Liability
     */
    public function setIsReleased($IsReleased)
    {
      $this->IsReleased = $IsReleased;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Liability
     */
    public function setAgreementDate(\Carbon\Carbon $AgreementDate = null)
    {
      if ($AgreementDate == null) {
       $this->AgreementDate = null;
      } else {
        $this->AgreementDate = $AgreementDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getReleasedBy()
    {
      return $this->ReleasedBy;
    }

    /**
     * @param int $ReleasedBy
     * @return \Nlocascio\Mindbody\MBOSoap\Liability
     */
    public function setReleasedBy($ReleasedBy)
    {
      $this->ReleasedBy = $ReleasedBy;
      return $this;
    }

}
