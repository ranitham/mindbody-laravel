<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetSalesRepsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $SalesRepNumbers
     */
    public $SalesRepNumbers = null;

    /**
     * @var boolean $ShowActiveOnly
     */
    public $ShowActiveOnly = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getSalesRepNumbers()
    {
      return $this->SalesRepNumbers;
    }

    /**
     * @param ArrayOfInt $SalesRepNumbers
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRepsRequest
     */
    public function setSalesRepNumbers($SalesRepNumbers)
    {
      $this->SalesRepNumbers = $SalesRepNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowActiveOnly()
    {
      return $this->ShowActiveOnly;
    }

    /**
     * @param boolean $ShowActiveOnly
     * @return \Nlocascio\Mindbody\MBOSoap\GetSalesRepsRequest
     */
    public function setShowActiveOnly($ShowActiveOnly)
    {
      $this->ShowActiveOnly = $ShowActiveOnly;
      return $this;
    }

}
