<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RecordSet
{

    /**
     * @var Row[] $Row
     */
    public $Row = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Row[]
     */
    public function getRow()
    {
      return $this->Row;
    }

    /**
     * @param Row[] $Row
     * @return \Nlocascio\Mindbody\MBOSoap\RecordSet
     */
    public function setRow(array $Row = null)
    {
      $this->Row = $Row;
      return $this;
    }

}
