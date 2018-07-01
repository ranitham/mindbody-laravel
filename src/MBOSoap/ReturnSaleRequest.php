<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ReturnSaleRequest extends MBRequest
{

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var int $SaleID
     */
    public $SaleID = null;

    /**
     * @var string $ReturnReason
     */
    public $ReturnReason = null;

    /**
     * @param boolean $Test
     */
    public function __construct($Test)
    {
      parent::__construct();
      $this->Test = $Test;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\ReturnSaleRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleID()
    {
      return $this->SaleID;
    }

    /**
     * @param int $SaleID
     * @return \Nlocascio\Mindbody\MBOSoap\ReturnSaleRequest
     */
    public function setSaleID($SaleID)
    {
      $this->SaleID = $SaleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnReason()
    {
      return $this->ReturnReason;
    }

    /**
     * @param string $ReturnReason
     * @return \Nlocascio\Mindbody\MBOSoap\ReturnSaleRequest
     */
    public function setReturnReason($ReturnReason)
    {
      $this->ReturnReason = $ReturnReason;
      return $this;
    }

}
