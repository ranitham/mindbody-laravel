<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddOrUpdateContactLogsRequest extends MBRequest
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
     * @var ArrayOfContactLog $ContactLogs
     */
    public $ContactLogs = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateContactLogsRequest
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
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateContactLogsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return ArrayOfContactLog
     */
    public function getContactLogs()
    {
      return $this->ContactLogs;
    }

    /**
     * @param ArrayOfContactLog $ContactLogs
     * @return \Nlocascio\Mindbody\MBOSoap\AddOrUpdateContactLogsRequest
     */
    public function setContactLogs($ContactLogs)
    {
      $this->ContactLogs = $ContactLogs;
      return $this;
    }

}
