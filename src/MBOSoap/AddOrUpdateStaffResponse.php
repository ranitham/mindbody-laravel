<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateStaffResponse
{

    /**
     * @var AddOrUpdateStaffResult $AddOrUpdateStaffResult
     */
    public $AddOrUpdateStaffResult = null;

    /**
     * @param AddOrUpdateStaffResult $AddOrUpdateStaffResult
     */
    public function __construct($AddOrUpdateStaffResult)
    {
      $this->AddOrUpdateStaffResult = $AddOrUpdateStaffResult;
    }

    /**
     * @return AddOrUpdateStaffResult
     */
    public function getAddOrUpdateStaffResult()
    {
      return $this->AddOrUpdateStaffResult;
    }

    /**
     * @param AddOrUpdateStaffResult $AddOrUpdateStaffResult
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateStaffResponse
     */
    public function setAddOrUpdateStaffResult($AddOrUpdateStaffResult)
    {
      $this->AddOrUpdateStaffResult = $AddOrUpdateStaffResult;
      return $this;
    }

}
