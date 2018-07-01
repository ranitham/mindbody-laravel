<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientContractsRequest extends CrossRegionalRequest
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset, $CrossRegionalLookup);
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
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientContractsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}
