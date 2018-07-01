<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Row
{

    /**
     * @var mixed $Content
     */
    public $Content = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param mixed $Content
     * @return \Nlocascio\Mindbody\MBOSoap\Row
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
