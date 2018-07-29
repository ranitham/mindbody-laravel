<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassDescriptionsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $ClassDescriptionIDs
     */
    public $ClassDescriptionIDs = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var ArrayOfInt $LocationIDs
     */
    public $LocationIDs = null;

    /**
     * @var \Carbon\Carbon $StartClassDateTime
     */
    public $StartClassDateTime = null;

    /**
     * @var \Carbon\Carbon $EndClassDateTime
     */
    public $EndClassDateTime = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassDescriptionIDs()
    {
      return $this->ClassDescriptionIDs;
    }

    /**
     * @param ArrayOfInt $ClassDescriptionIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setClassDescriptionIDs($ClassDescriptionIDs)
    {
      $this->ClassDescriptionIDs = $ClassDescriptionIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getStaffIDs()
    {
      return $this->StaffIDs;
    }

    /**
     * @param ArrayOfLong $StaffIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationIDs()
    {
      return $this->LocationIDs;
    }

    /**
     * @param ArrayOfInt $LocationIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartClassDateTime()
    {
      if ($this->StartClassDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartClassDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartClassDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setStartClassDateTime(\Carbon\Carbon $StartClassDateTime = null)
    {
      if ($StartClassDateTime == null) {
       $this->StartClassDateTime = null;
      } else {
        $this->StartClassDateTime = $StartClassDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndClassDateTime()
    {
      if ($this->EndClassDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndClassDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndClassDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsRequest
     */
    public function setEndClassDateTime(\Carbon\Carbon $EndClassDateTime = null)
    {
      if ($EndClassDateTime == null) {
       $this->EndClassDateTime = null;
      } else {
        $this->EndClassDateTime = $EndClassDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
