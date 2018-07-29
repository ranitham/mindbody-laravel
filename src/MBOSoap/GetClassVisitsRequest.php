<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassVisitsRequest extends MBRequest
{

    /**
     * @var int $ClassID
     */
    public $ClassID = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDate
     */
    public $LastModifiedDate = null;

    /**
     * @param int $ClassID
     */
    public function __construct($ClassID)
    {
      parent::__construct();
      $this->ClassID = $ClassID;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassVisitsRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastModifiedDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastModifiedDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassVisitsRequest
     */
    public function setLastModifiedDate(\Carbon\Carbon $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
