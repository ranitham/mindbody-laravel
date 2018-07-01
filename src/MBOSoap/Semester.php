<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Semester
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
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    /**
     * @var float $MultiRegistrationDiscount
     */
    public $MultiRegistrationDiscount = null;

    /**
     * @var \Carbon\Carbon $MultiRegistrationDeadline
     */
    public $MultiRegistrationDeadline = null;

    /**
     * @param int $ID
     * @param \Carbon\Carbon $StartDate
     * @param \Carbon\Carbon $EndDate
     * @param float $MultiRegistrationDiscount
     * @param \Carbon\Carbon $MultiRegistrationDeadline
     */
    public function __construct($ID, \Carbon\Carbon $StartDate, \Carbon\Carbon $EndDate, $MultiRegistrationDiscount, \Carbon\Carbon $MultiRegistrationDeadline)
    {
      $this->ID = $ID;
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      $this->MultiRegistrationDiscount = $MultiRegistrationDiscount;
      $this->MultiRegistrationDeadline = $MultiRegistrationDeadline->format(\Carbon\Carbon::ATOM);
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
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
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
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setStartDate(\Carbon\Carbon $StartDate)
    {
      $this->StartDate = $StartDate->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setEndDate(\Carbon\Carbon $EndDate)
    {
      $this->EndDate = $EndDate->format(\Carbon\Carbon::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getMultiRegistrationDiscount()
    {
      return $this->MultiRegistrationDiscount;
    }

    /**
     * @param float $MultiRegistrationDiscount
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setMultiRegistrationDiscount($MultiRegistrationDiscount)
    {
      $this->MultiRegistrationDiscount = $MultiRegistrationDiscount;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getMultiRegistrationDeadline()
    {
      if ($this->MultiRegistrationDeadline == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->MultiRegistrationDeadline);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $MultiRegistrationDeadline
     * @return \Nlocascio\Mindbody\MBOSoap\Semester
     */
    public function setMultiRegistrationDeadline(\Carbon\Carbon $MultiRegistrationDeadline)
    {
      $this->MultiRegistrationDeadline = $MultiRegistrationDeadline->format(\Carbon\Carbon::ATOM);
      return $this;
    }

}
