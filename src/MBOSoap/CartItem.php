<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CartItem extends MBObject
{

    /**
     * @var Item $Item
     */
    public $Item = null;

    /**
     * @var float $DiscountAmount
     */
    public $DiscountAmount = null;

    /**
     * @var ArrayOfAppointment $Appointments
     */
    public $Appointments = null;

    /**
     * @var ArrayOfInt $EnrollmentIDs
     */
    public $EnrollmentIDs = null;

    /**
     * @var ArrayOfInt $ClassIDs
     */
    public $ClassIDs = null;

    /**
     * @var ArrayOfLong $CourseIDs
     */
    public $CourseIDs = null;

    /**
     * @var ArrayOfLong $VisitIDs
     */
    public $VisitIDs = null;

    /**
     * @var ArrayOfLong $AppointmentIDs
     */
    public $AppointmentIDs = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var int $Quantity
     */
    public $Quantity = null;

    /**
     * @param float $DiscountAmount
     */
    public function __construct($DiscountAmount)
    {
      parent::__construct();
      $this->DiscountAmount = $DiscountAmount;
    }

    /**
     * @return Item
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param Item $Item
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmount
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return ArrayOfAppointment
     */
    public function getAppointments()
    {
      return $this->Appointments;
    }

    /**
     * @param ArrayOfAppointment $Appointments
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setAppointments($Appointments)
    {
      $this->Appointments = $Appointments;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getEnrollmentIDs()
    {
      return $this->EnrollmentIDs;
    }

    /**
     * @param ArrayOfInt $EnrollmentIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setEnrollmentIDs($EnrollmentIDs)
    {
      $this->EnrollmentIDs = $EnrollmentIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassIDs()
    {
      return $this->ClassIDs;
    }

    /**
     * @param ArrayOfInt $ClassIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setClassIDs($ClassIDs)
    {
      $this->ClassIDs = $ClassIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getCourseIDs()
    {
      return $this->CourseIDs;
    }

    /**
     * @param ArrayOfLong $CourseIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setCourseIDs($CourseIDs)
    {
      $this->CourseIDs = $CourseIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getVisitIDs()
    {
      return $this->VisitIDs;
    }

    /**
     * @param ArrayOfLong $VisitIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setVisitIDs($VisitIDs)
    {
      $this->VisitIDs = $VisitIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getAppointmentIDs()
    {
      return $this->AppointmentIDs;
    }

    /**
     * @param ArrayOfLong $AppointmentIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setAppointmentIDs($AppointmentIDs)
    {
      $this->AppointmentIDs = $AppointmentIDs;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Nlocascio\Mindbody\MBOSoap\CartItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
