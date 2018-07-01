<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SourceCredentials
{

    /**
     * @var string $SourceName
     */
    public $SourceName = null;

    /**
     * @var string $Password
     */
    public $Password = null;

    /**
     * @var ArrayOfInt $SiteIDs
     */
    public $SiteIDs = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
      return $this->SourceName;
    }

    /**
     * @param string $SourceName
     * @return \Nlocascio\Mindbody\MBOSoap\SourceCredentials
     */
    public function setSourceName($SourceName)
    {
      $this->SourceName = $SourceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Nlocascio\Mindbody\MBOSoap\SourceCredentials
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSiteIDs()
    {
      return $this->SiteIDs;
    }

    /**
     * @param ArrayOfInt $SiteIDs
     * @return \Nlocascio\Mindbody\MBOSoap\SourceCredentials
     */
    public function setSiteIDs($SiteIDs)
    {
      $this->SiteIDs = $SiteIDs;
      return $this;
    }

}
