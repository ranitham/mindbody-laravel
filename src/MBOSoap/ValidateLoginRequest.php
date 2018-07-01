<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ValidateLoginRequest extends MBRequest
{

    /**
     * @var string $Username
     */
    public $Username = null;

    /**
     * @var string $Password
     */
    public $Password = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\ValidateLoginRequest
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
