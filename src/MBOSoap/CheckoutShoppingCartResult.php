<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CheckoutShoppingCartResult extends MBResult
{

    /**
     * @var ShoppingCart $ShoppingCart
     */
    public $ShoppingCart = null;

    /**
     * @var ArrayOfClass $Classes
     */
    public $Classes = null;

    /**
     * @var ArrayOfAppointment $Appointments
     */
    public $Appointments = null;

    /**
     * @var ArrayOfClassSchedule $Enrollments
     */
    public $Enrollments = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ShoppingCart
     */
    public function getShoppingCart()
    {
      return $this->ShoppingCart;
    }

    /**
     * @param ShoppingCart $ShoppingCart
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartResult
     */
    public function setShoppingCart($ShoppingCart)
    {
      $this->ShoppingCart = $ShoppingCart;
      return $this;
    }

    /**
     * @return ArrayOfClass
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfClass $Classes
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartResult
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
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
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartResult
     */
    public function setAppointments($Appointments)
    {
      $this->Appointments = $Appointments;
      return $this;
    }

    /**
     * @return ArrayOfClassSchedule
     */
    public function getEnrollments()
    {
      return $this->Enrollments;
    }

    /**
     * @param ArrayOfClassSchedule $Enrollments
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartResult
     */
    public function setEnrollments($Enrollments)
    {
      $this->Enrollments = $Enrollments;
      return $this;
    }

}
