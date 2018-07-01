<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientVisitsRequest extends PagedBySitesMBRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var boolean $UnpaidsOnly
     */
    public $UnpaidsOnly = null;

    /**
     * @var boolean $CrossRegionalLookup
     */
    public $CrossRegionalLookup = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param boolean $UnpaidsOnly
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $UnpaidsOnly, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset);
      $this->UnpaidsOnly = $UnpaidsOnly;
      $this->CrossRegionalLookup = $CrossRegionalLookup;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsRequest
     */
    public function setStartDate(\Carbon\Carbon $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsRequest
     */
    public function setEndDate(\Carbon\Carbon $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnpaidsOnly()
    {
      return $this->UnpaidsOnly;
    }

    /**
     * @param boolean $UnpaidsOnly
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsRequest
     */
    public function setUnpaidsOnly($UnpaidsOnly)
    {
      $this->UnpaidsOnly = $UnpaidsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossRegionalLookup()
    {
      return $this->CrossRegionalLookup;
    }

    /**
     * @param boolean $CrossRegionalLookup
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientVisitsRequest
     */
    public function setCrossRegionalLookup($CrossRegionalLookup)
    {
      $this->CrossRegionalLookup = $CrossRegionalLookup;
      return $this;
    }

}
