<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Program extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var ScheduleType $ScheduleType
     */
    public $ScheduleType = null;

    /**
     * @var int $CancelOffset
     */
    public $CancelOffset = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Nlocascio\Mindbody\MBOSoap\Program
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Nlocascio\Mindbody\MBOSoap\Program
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ScheduleType
     */
    public function getScheduleType()
    {
      return $this->ScheduleType;
    }

    /**
     * @param ScheduleType $ScheduleType
     * @return \Nlocascio\Mindbody\MBOSoap\Program
     */
    public function setScheduleType($ScheduleType)
    {
      $this->ScheduleType = $ScheduleType;
      return $this;
    }

    /**
     * @return int
     */
    public function getCancelOffset()
    {
      return $this->CancelOffset;
    }

    /**
     * @param int $CancelOffset
     * @return \Nlocascio\Mindbody\MBOSoap\Program
     */
    public function setCancelOffset($CancelOffset)
    {
      $this->CancelOffset = $CancelOffset;
      return $this;
    }

}
