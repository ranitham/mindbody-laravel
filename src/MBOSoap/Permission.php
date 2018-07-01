<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Permission
{

    /**
     * @var string $DisplayName
     */
    public $DisplayName = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var string $Value
     */
    public $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \Nlocascio\Mindbody\MBOSoap\Permission
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Nlocascio\Mindbody\MBOSoap\Permission
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Nlocascio\Mindbody\MBOSoap\Permission
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
