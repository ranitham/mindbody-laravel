<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PagedBySitesMBRequest extends MBRequest
{

    /**
     * @var int $ClientAssociatedSitesOffset
     */
    public $ClientAssociatedSitesOffset = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     */
    public function __construct($ClientAssociatedSitesOffset)
    {
      parent::__construct();
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
    }

    /**
     * @return int
     */
    public function getClientAssociatedSitesOffset()
    {
      return $this->ClientAssociatedSitesOffset;
    }

    /**
     * @param int $ClientAssociatedSitesOffset
     * @return \Nlocascio\Mindbody\MBOSoap\PagedBySitesMBRequest
     */
    public function setClientAssociatedSitesOffset($ClientAssociatedSitesOffset)
    {
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
      return $this;
    }

}
