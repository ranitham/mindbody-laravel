<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetPackagesRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $PackageIDs
     */
    public $PackageIDs = null;

    /**
     * @var boolean $SellOnline
     */
    public $SellOnline = null;

    /**
     * @param boolean $SellOnline
     */
    public function __construct($SellOnline)
    {
      parent::__construct();
      $this->SellOnline = $SellOnline;
    }

    /**
     * @return ArrayOfInt
     */
    public function getPackageIDs()
    {
      return $this->PackageIDs;
    }

    /**
     * @param ArrayOfInt $PackageIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetPackagesRequest
     */
    public function setPackageIDs($PackageIDs)
    {
      $this->PackageIDs = $PackageIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellOnline()
    {
      return $this->SellOnline;
    }

    /**
     * @param boolean $SellOnline
     * @return \Nlocascio\Mindbody\MBOSoap\GetPackagesRequest
     */
    public function setSellOnline($SellOnline)
    {
      $this->SellOnline = $SellOnline;
      return $this;
    }

}
