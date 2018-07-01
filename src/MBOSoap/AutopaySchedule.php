<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AutopaySchedule
{

    /**
     * @var string $FrequencyType
     */
    public $FrequencyType = null;

    /**
     * @var int $FrequencyValue
     */
    public $FrequencyValue = null;

    /**
     * @var string $FrequencyTimeUnit
     */
    public $FrequencyTimeUnit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFrequencyType()
    {
      return $this->FrequencyType;
    }

    /**
     * @param string $FrequencyType
     * @return \Nlocascio\Mindbody\MBOSoap\AutopaySchedule
     */
    public function setFrequencyType($FrequencyType)
    {
      $this->FrequencyType = $FrequencyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyValue()
    {
      return $this->FrequencyValue;
    }

    /**
     * @param int $FrequencyValue
     * @return \Nlocascio\Mindbody\MBOSoap\AutopaySchedule
     */
    public function setFrequencyValue($FrequencyValue)
    {
      $this->FrequencyValue = $FrequencyValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequencyTimeUnit()
    {
      return $this->FrequencyTimeUnit;
    }

    /**
     * @param string $FrequencyTimeUnit
     * @return \Nlocascio\Mindbody\MBOSoap\AutopaySchedule
     */
    public function setFrequencyTimeUnit($FrequencyTimeUnit)
    {
      $this->FrequencyTimeUnit = $FrequencyTimeUnit;
      return $this;
    }

}
