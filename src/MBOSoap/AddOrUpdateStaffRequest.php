<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateStaffRequest extends MBRequest
{

    /**
     * @var string $UpdateAction
     */
    public $UpdateAction = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var ArrayOfStaff $Staff
     */
    public $Staff = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUpdateAction()
    {
      return $this->UpdateAction;
    }

    /**
     * @param string $UpdateAction
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateStaffRequest
     */
    public function setUpdateAction($UpdateAction)
    {
      $this->UpdateAction = $UpdateAction;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateStaffRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return ArrayOfStaff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param ArrayOfStaff $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateStaffRequest
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

}
