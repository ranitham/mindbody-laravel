<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Location extends MBObject
{

    /**
     * @var int $BusinessID
     */
    public $BusinessID = null;

    /**
     * @var int $SiteID
     */
    public $SiteID = null;

    /**
     * @var string $BusinessDescription
     */
    public $BusinessDescription = null;

    /**
     * @var ArrayOfString $AdditionalImageURLs
     */
    public $AdditionalImageURLs = null;

    /**
     * @var int $FacilitySquareFeet
     */
    public $FacilitySquareFeet = null;

    /**
     * @var int $TreatmentRooms
     */
    public $TreatmentRooms = null;

    /**
     * @var boolean $ProSpaFinderSite
     */
    public $ProSpaFinderSite = null;

    /**
     * @var boolean $HasClasses
     */
    public $HasClasses = null;

    /**
     * @var string $PhoneExtension
     */
    public $PhoneExtension = null;

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
     * @var string $Address
     */
    public $Address = null;

    /**
     * @var string $Address2
     */
    public $Address2 = null;

    /**
     * @var float $Tax1
     */
    public $Tax1 = null;

    /**
     * @var float $Tax2
     */
    public $Tax2 = null;

    /**
     * @var float $Tax3
     */
    public $Tax3 = null;

    /**
     * @var float $Tax4
     */
    public $Tax4 = null;

    /**
     * @var float $Tax5
     */
    public $Tax5 = null;

    /**
     * @var string $Phone
     */
    public $Phone = null;

    /**
     * @var string $City
     */
    public $City = null;

    /**
     * @var string $StateProvCode
     */
    public $StateProvCode = null;

    /**
     * @var string $PostalCode
     */
    public $PostalCode = null;

    /**
     * @var float $Latitude
     */
    public $Latitude = null;

    /**
     * @var float $Longitude
     */
    public $Longitude = null;

    /**
     * @var float $DistanceInMiles
     */
    public $DistanceInMiles = null;

    /**
     * @var string $ImageURL
     */
    public $ImageURL = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var boolean $HasSite
     */
    public $HasSite = null;

    /**
     * @var boolean $CanBook
     */
    public $CanBook = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getBusinessID()
    {
      return $this->BusinessID;
    }

    /**
     * @param int $BusinessID
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setBusinessID($BusinessID)
    {
      $this->BusinessID = $BusinessID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessDescription()
    {
      return $this->BusinessDescription;
    }

    /**
     * @param string $BusinessDescription
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setBusinessDescription($BusinessDescription)
    {
      $this->BusinessDescription = $BusinessDescription;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAdditionalImageURLs()
    {
      return $this->AdditionalImageURLs;
    }

    /**
     * @param ArrayOfString $AdditionalImageURLs
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setAdditionalImageURLs($AdditionalImageURLs)
    {
      $this->AdditionalImageURLs = $AdditionalImageURLs;
      return $this;
    }

    /**
     * @return int
     */
    public function getFacilitySquareFeet()
    {
      return $this->FacilitySquareFeet;
    }

    /**
     * @param int $FacilitySquareFeet
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setFacilitySquareFeet($FacilitySquareFeet)
    {
      $this->FacilitySquareFeet = $FacilitySquareFeet;
      return $this;
    }

    /**
     * @return int
     */
    public function getTreatmentRooms()
    {
      return $this->TreatmentRooms;
    }

    /**
     * @param int $TreatmentRooms
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTreatmentRooms($TreatmentRooms)
    {
      $this->TreatmentRooms = $TreatmentRooms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProSpaFinderSite()
    {
      return $this->ProSpaFinderSite;
    }

    /**
     * @param boolean $ProSpaFinderSite
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setProSpaFinderSite($ProSpaFinderSite)
    {
      $this->ProSpaFinderSite = $ProSpaFinderSite;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasClasses()
    {
      return $this->HasClasses;
    }

    /**
     * @param boolean $HasClasses
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setHasClasses($HasClasses)
    {
      $this->HasClasses = $HasClasses;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneExtension()
    {
      return $this->PhoneExtension;
    }

    /**
     * @param string $PhoneExtension
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setPhoneExtension($PhoneExtension)
    {
      $this->PhoneExtension = $PhoneExtension;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax1()
    {
      return $this->Tax1;
    }

    /**
     * @param float $Tax1
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTax1($Tax1)
    {
      $this->Tax1 = $Tax1;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax2()
    {
      return $this->Tax2;
    }

    /**
     * @param float $Tax2
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTax2($Tax2)
    {
      $this->Tax2 = $Tax2;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax3()
    {
      return $this->Tax3;
    }

    /**
     * @param float $Tax3
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTax3($Tax3)
    {
      $this->Tax3 = $Tax3;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax4()
    {
      return $this->Tax4;
    }

    /**
     * @param float $Tax4
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTax4($Tax4)
    {
      $this->Tax4 = $Tax4;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax5()
    {
      return $this->Tax5;
    }

    /**
     * @param float $Tax5
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setTax5($Tax5)
    {
      $this->Tax5 = $Tax5;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateProvCode()
    {
      return $this->StateProvCode;
    }

    /**
     * @param string $StateProvCode
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setStateProvCode($StateProvCode)
    {
      $this->StateProvCode = $StateProvCode;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getDistanceInMiles()
    {
      return $this->DistanceInMiles;
    }

    /**
     * @param float $DistanceInMiles
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setDistanceInMiles($DistanceInMiles)
    {
      $this->DistanceInMiles = $DistanceInMiles;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSite()
    {
      return $this->HasSite;
    }

    /**
     * @param boolean $HasSite
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setHasSite($HasSite)
    {
      $this->HasSite = $HasSite;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanBook()
    {
      return $this->CanBook;
    }

    /**
     * @param boolean $CanBook
     * @return \Nlocascio\Mindbody\MBOSoap\Location
     */
    public function setCanBook($CanBook)
    {
      $this->CanBook = $CanBook;
      return $this;
    }

}
