<?php

namespace Nlocascio\Mindbody\MBOSoap;

class PaymentInfo
{

    /**
     * @var string $Name
     */
    public $Name = null;

    
    public function __construct()
    {
    
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
     * @return \Nlocascio\Mindbody\MBOSoap\PaymentInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
