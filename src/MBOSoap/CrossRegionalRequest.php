<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CrossRegionalRequest extends PagedBySitesMBRequest
{

    /**
     * @var boolean $CrossRegionalLookup
     */
    public $CrossRegionalLookup = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset);
      $this->CrossRegionalLookup = $CrossRegionalLookup;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CrossRegionalRequest
     */
    public function setCrossRegionalLookup($CrossRegionalLookup)
    {
      $this->CrossRegionalLookup = $CrossRegionalLookup;
      return $this;
    }

}
