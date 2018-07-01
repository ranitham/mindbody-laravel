<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UserCredentials
{

    /**
     * @var string $Username
     */
    public $Username = null;

    /**
     * @var string $Password
     */
    public $Password = null;

    /**
     * @var ArrayOfInt $SiteIDs
     */
    public $SiteIDs = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Nlocascio\Mindbody\MBOSoap\UserCredentials
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
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
     * @return \Nlocascio\Mindbody\MBOSoap\UserCredentials
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
     * @return \Nlocascio\Mindbody\MBOSoap\UserCredentials
     */
    public function setSiteIDs($SiteIDs)
    {
      $this->SiteIDs = $SiteIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\UserCredentials
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
