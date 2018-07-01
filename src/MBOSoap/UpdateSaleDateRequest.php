<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateSaleDateRequest extends MBRequest
{

    /**
     * @var int $SaleID
     */
    public $SaleID = null;

    /**
     * @var \Carbon\Carbon $SaleDate
     */
    public $SaleDate = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateSaleDateRequest
     */
    public function setSaleID($SaleID)
    {
      $this->SaleID = $SaleID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getSaleDate()
    {
      if ($this->SaleDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->SaleDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $SaleDate
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateSaleDateRequest
     */
    public function setSaleDate(\Carbon\Carbon $SaleDate = null)
    {
      if ($SaleDate == null) {
       $this->SaleDate = null;
      } else {
        $this->SaleDate = $SaleDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

}
