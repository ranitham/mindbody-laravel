<?php

namespace Nlocascio\Mindbody\MBOSoap;

class SendUserNewPasswordRequest extends MBRequest
{

    /**
     * @var string $UserEmail
     */
    public $UserEmail = null;

    /**
     * @var string $UserFirstName
     */
    public $UserFirstName = null;

    /**
     * @var string $UserLastName
     */
    public $UserLastName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
      return $this->UserEmail;
    }

    /**
     * @param string $UserEmail
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPasswordRequest
     */
    public function setUserEmail($UserEmail)
    {
      $this->UserEmail = $UserEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
      return $this->UserFirstName;
    }

    /**
     * @param string $UserFirstName
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPasswordRequest
     */
    public function setUserFirstName($UserFirstName)
    {
      $this->UserFirstName = $UserFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
      return $this->UserLastName;
    }

    /**
     * @param string $UserLastName
     * @return \Nlocascio\Mindbody\MBOSoap\SendUserNewPasswordRequest
     */
    public function setUserLastName($UserLastName)
    {
      $this->UserLastName = $UserLastName;
      return $this;
    }

}
