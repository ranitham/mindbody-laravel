<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSitesRequest extends MBRequest
{

    /**
     * @var string $SearchText
     */
    public $SearchText = null;

    /**
     * @var int $RelatedSiteID
     */
    public $RelatedSiteID = null;

    /**
     * @var boolean $ShowOnlyTotalWOD
     */
    public $ShowOnlyTotalWOD = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return \Nlocascio\Mindbody\MBOSoap\GetSitesRequest
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelatedSiteID()
    {
      return $this->RelatedSiteID;
    }

    /**
     * @param int $RelatedSiteID
     * @return \Nlocascio\Mindbody\MBOSoap\GetSitesRequest
     */
    public function setRelatedSiteID($RelatedSiteID)
    {
      $this->RelatedSiteID = $RelatedSiteID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyTotalWOD()
    {
      return $this->ShowOnlyTotalWOD;
    }

    /**
     * @param boolean $ShowOnlyTotalWOD
     * @return \Nlocascio\Mindbody\MBOSoap\GetSitesRequest
     */
    public function setShowOnlyTotalWOD($ShowOnlyTotalWOD)
    {
      $this->ShowOnlyTotalWOD = $ShowOnlyTotalWOD;
      return $this;
    }

}
