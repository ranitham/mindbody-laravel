<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Staff extends MBObject
{

    /**
     * @var ArrayOfAppointment $Appointments
     */
    public $Appointments = null;

    /**
     * @var ArrayOfUnavailability $Unavailabilities
     */
    public $Unavailabilities = null;

    /**
     * @var ArrayOfAvailability $Availabilities
     */
    public $Availabilities = null;

    /**
     * @var string $Email
     */
    public $Email = null;

    /**
     * @var string $MobilePhone
     */
    public $MobilePhone = null;

    /**
     * @var string $HomePhone
     */
    public $HomePhone = null;

    /**
     * @var string $WorkPhone
     */
    public $WorkPhone = null;

    /**
     * @var string $Address
     */
    public $Address = null;

    /**
     * @var string $Address2
     */
    public $Address2 = null;

    /**
     * @var string $City
     */
    public $City = null;

    /**
     * @var string $State
     */
    public $State = null;

    /**
     * @var string $Country
     */
    public $Country = null;

    /**
     * @var string $PostalCode
     */
    public $PostalCode = null;

    /**
     * @var string $ForeignZip
     */
    public $ForeignZip = null;

    /**
     * @var int $SortOrder
     */
    public $SortOrder = null;

    /**
     * @var ArrayOfLocation $LoginLocations
     */
    public $LoginLocations = null;

    /**
     * @var boolean $MultiLocation
     */
    public $MultiLocation = null;

    /**
     * @var boolean $AppointmentTrn
     */
    public $AppointmentTrn = null;

    /**
     * @var boolean $ReservationTrn
     */
    public $ReservationTrn = null;

    /**
     * @var boolean $IndependentContractor
     */
    public $IndependentContractor = null;

    /**
     * @var boolean $AlwaysAllowDoubleBooking
     */
    public $AlwaysAllowDoubleBooking = null;

    /**
     * @var string $UserAccessLevel
     */
    public $UserAccessLevel = null;

    /**
     * @var ArrayOfString $ProviderIDs
     */
    public $ProviderIDs = null;

    /**
     * @var ArrayOfProviderIDUpdate $ProviderIDUpdateList
     */
    public $ProviderIDUpdateList = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var string $FirstName
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     */
    public $LastName = null;

    /**
     * @var string $ImageURL
     */
    public $ImageURL = null;

    /**
     * @var string $Bio
     */
    public $Bio = null;

    /**
     * @var boolean $isMale
     */
    public $isMale = null;

    /**
     * @param boolean $isMale
     */
    public function __construct($isMale)
    {
      parent::__construct();
      $this->isMale = $isMale;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAppointments($Appointments)
    {
      $this->Appointments = $Appointments;
      return $this;
    }

    /**
     * @return ArrayOfUnavailability
     */
    public function getUnavailabilities()
    {
      return $this->Unavailabilities;
    }

    /**
     * @param ArrayOfUnavailability $Unavailabilities
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setUnavailabilities($Unavailabilities)
    {
      $this->Unavailabilities = $Unavailabilities;
      return $this;
    }

    /**
     * @return ArrayOfAvailability
     */
    public function getAvailabilities()
    {
      return $this->Availabilities;
    }

    /**
     * @param ArrayOfAvailability $Availabilities
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAvailabilities($Availabilities)
    {
      $this->Availabilities = $Availabilities;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
      return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setHomePhone($HomePhone)
    {
      $this->HomePhone = $HomePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
      return $this->WorkPhone;
    }

    /**
     * @param string $WorkPhone
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setWorkPhone($WorkPhone)
    {
      $this->WorkPhone = $WorkPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignZip()
    {
      return $this->ForeignZip;
    }

    /**
     * @param string $ForeignZip
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setForeignZip($ForeignZip)
    {
      $this->ForeignZip = $ForeignZip;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param int $SortOrder
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

    /**
     * @return ArrayOfLocation
     */
    public function getLoginLocations()
    {
      return $this->LoginLocations;
    }

    /**
     * @param ArrayOfLocation $LoginLocations
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setLoginLocations($LoginLocations)
    {
      $this->LoginLocations = $LoginLocations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiLocation()
    {
      return $this->MultiLocation;
    }

    /**
     * @param boolean $MultiLocation
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setMultiLocation($MultiLocation)
    {
      $this->MultiLocation = $MultiLocation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppointmentTrn()
    {
      return $this->AppointmentTrn;
    }

    /**
     * @param boolean $AppointmentTrn
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAppointmentTrn($AppointmentTrn)
    {
      $this->AppointmentTrn = $AppointmentTrn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReservationTrn()
    {
      return $this->ReservationTrn;
    }

    /**
     * @param boolean $ReservationTrn
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setReservationTrn($ReservationTrn)
    {
      $this->ReservationTrn = $ReservationTrn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndependentContractor()
    {
      return $this->IndependentContractor;
    }

    /**
     * @param boolean $IndependentContractor
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setIndependentContractor($IndependentContractor)
    {
      $this->IndependentContractor = $IndependentContractor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAlwaysAllowDoubleBooking()
    {
      return $this->AlwaysAllowDoubleBooking;
    }

    /**
     * @param boolean $AlwaysAllowDoubleBooking
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setAlwaysAllowDoubleBooking($AlwaysAllowDoubleBooking)
    {
      $this->AlwaysAllowDoubleBooking = $AlwaysAllowDoubleBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserAccessLevel()
    {
      return $this->UserAccessLevel;
    }

    /**
     * @param string $UserAccessLevel
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setUserAccessLevel($UserAccessLevel)
    {
      $this->UserAccessLevel = $UserAccessLevel;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getProviderIDs()
    {
      return $this->ProviderIDs;
    }

    /**
     * @param ArrayOfString $ProviderIDs
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setProviderIDs($ProviderIDs)
    {
      $this->ProviderIDs = $ProviderIDs;
      return $this;
    }

    /**
     * @return ArrayOfProviderIDUpdate
     */
    public function getProviderIDUpdateList()
    {
      return $this->ProviderIDUpdateList;
    }

    /**
     * @param ArrayOfProviderIDUpdate $ProviderIDUpdateList
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setProviderIDUpdateList($ProviderIDUpdateList)
    {
      $this->ProviderIDUpdateList = $ProviderIDUpdateList;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
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
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
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
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
      return $this->ImageURL;
    }

    /**
     * @param string $ImageURL
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getBio()
    {
      return $this->Bio;
    }

    /**
     * @param string $Bio
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setBio($Bio)
    {
      $this->Bio = $Bio;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMale()
    {
      return $this->isMale;
    }

    /**
     * @param boolean $isMale
     * @return \Nlocascio\Mindbody\MBOSoap\Staff
     */
    public function setIsMale($isMale)
    {
      $this->isMale = $isMale;
      return $this;
    }

}
