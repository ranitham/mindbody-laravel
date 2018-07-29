<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Client extends MBObject
{

    /**
     * @var string $NewID
     */
    public $NewID = null;

    /**
     * @var float $AccountBalance
     */
    public $AccountBalance = null;

    /**
     * @var ArrayOfClientIndex $ClientIndexes
     */
    public $ClientIndexes = null;

    /**
     * @var string $Username
     */
    public $Username = null;

    /**
     * @var string $Password
     */
    public $Password = null;

    /**
     * @var string $Notes
     */
    public $Notes = null;

    /**
     * @var int $MobileProvider
     */
    public $MobileProvider = null;

    /**
     * @var ClientCreditCard $ClientCreditCard
     */
    public $ClientCreditCard = null;

    /**
     * @var string $LastFormulaNotes
     */
    public $LastFormulaNotes = null;

    /**
     * @var string $AppointmentGenderPreference
     */
    public $AppointmentGenderPreference = null;

    /**
     * @var string $Gender
     */
    public $Gender = null;

    /**
     * @var boolean $IsCompany
     */
    public $IsCompany = null;

    /**
     * @var boolean $Inactive
     */
    public $Inactive = null;

    /**
     * @var ArrayOfClientRelationship $ClientRelationships
     */
    public $ClientRelationships = null;

    /**
     * @var ArrayOfRep $Reps
     */
    public $Reps = null;

    /**
     * @var ArrayOfSalesRep $SaleReps
     */
    public $SaleReps = null;

    /**
     * @var ArrayOfCustomClientField $CustomClientFields
     */
    public $CustomClientFields = null;

    /**
     * @var boolean $LiabilityRelease
     */
    public $LiabilityRelease = null;

    /**
     * @var string $EmergencyContactInfoName
     */
    public $EmergencyContactInfoName = null;

    /**
     * @var string $EmergencyContactInfoRelationship
     */
    public $EmergencyContactInfoRelationship = null;

    /**
     * @var string $EmergencyContactInfoPhone
     */
    public $EmergencyContactInfoPhone = null;

    /**
     * @var string $EmergencyContactInfoEmail
     */
    public $EmergencyContactInfoEmail = null;

    /**
     * @var boolean $PromotionalEmailOptIn
     */
    public $PromotionalEmailOptIn = null;

    /**
     * @var \Carbon\Carbon $CreationDate
     */
    public $CreationDate = null;

    /**
     * @var Liability $Liability
     */
    public $Liability = null;

    /**
     * @var ProspectStage $ProspectStage
     */
    public $ProspectStage = null;

    /**
     * @var int $UniqueID
     */
    public $UniqueID = null;

    /**
     * @var int $MembershipIcon
     */
    public $MembershipIcon = null;

    /**
     * @var int $SiteId
     */
    public $SiteId = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    /**
     * @var string $ID
     */
    public $ID = null;

    /**
     * @var string $FirstName
     */
    public $FirstName = null;

    /**
     * @var string $MiddleName
     */
    public $MiddleName = null;

    /**
     * @var string $LastName
     */
    public $LastName = null;

    /**
     * @var string $Email
     */
    public $Email = null;

    /**
     * @var boolean $EmailOptIn
     */
    public $EmailOptIn = null;

    /**
     * @var string $AddressLine1
     */
    public $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    public $AddressLine2 = null;

    /**
     * @var string $City
     */
    public $City = null;

    /**
     * @var string $State
     */
    public $State = null;

    /**
     * @var string $PostalCode
     */
    public $PostalCode = null;

    /**
     * @var string $Country
     */
    public $Country = null;

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
     * @var string $WorkExtension
     */
    public $WorkExtension = null;

    /**
     * @var \Carbon\Carbon $BirthDate
     */
    public $BirthDate = null;

    /**
     * @var \Carbon\Carbon $FirstAppointmentDate
     */
    public $FirstAppointmentDate = null;

    /**
     * @var string $ReferredBy
     */
    public $ReferredBy = null;

    /**
     * @var Location $HomeLocation
     */
    public $HomeLocation = null;

    /**
     * @var string $YellowAlert
     */
    public $YellowAlert = null;

    /**
     * @var string $RedAlert
     */
    public $RedAlert = null;

    /**
     * @var string $PhotoURL
     */
    public $PhotoURL = null;

    /**
     * @var boolean $IsProspect
     */
    public $IsProspect = null;

    /**
     * @var \Carbon\Carbon $LastModifiedDateTime
     */
    public $LastModifiedDateTime = null;

    /**
     * @var string $Status
     */
    public $Status = null;

    /**
     * @var int $ContactMethod
     */
    public $ContactMethod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getNewID()
    {
      return $this->NewID;
    }

    /**
     * @param string $NewID
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setNewID($NewID)
    {
      $this->NewID = $NewID;
      return $this;
    }

    /**
     * @return float
     */
    public function getAccountBalance()
    {
      return $this->AccountBalance;
    }

    /**
     * @param float $AccountBalance
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setAccountBalance($AccountBalance)
    {
      $this->AccountBalance = $AccountBalance;
      return $this;
    }

    /**
     * @return ArrayOfClientIndex
     */
    public function getClientIndexes()
    {
      return $this->ClientIndexes;
    }

    /**
     * @param ArrayOfClientIndex $ClientIndexes
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setClientIndexes($ClientIndexes)
    {
      $this->ClientIndexes = $ClientIndexes;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMobileProvider()
    {
      return $this->MobileProvider;
    }

    /**
     * @param int $MobileProvider
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setMobileProvider($MobileProvider)
    {
      $this->MobileProvider = $MobileProvider;
      return $this;
    }

    /**
     * @return ClientCreditCard
     */
    public function getClientCreditCard()
    {
      return $this->ClientCreditCard;
    }

    /**
     * @param ClientCreditCard $ClientCreditCard
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setClientCreditCard($ClientCreditCard)
    {
      $this->ClientCreditCard = $ClientCreditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastFormulaNotes()
    {
      return $this->LastFormulaNotes;
    }

    /**
     * @param string $LastFormulaNotes
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setLastFormulaNotes($LastFormulaNotes)
    {
      $this->LastFormulaNotes = $LastFormulaNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentGenderPreference()
    {
      return $this->AppointmentGenderPreference;
    }

    /**
     * @param string $AppointmentGenderPreference
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setAppointmentGenderPreference($AppointmentGenderPreference)
    {
      $this->AppointmentGenderPreference = $AppointmentGenderPreference;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param string $Gender
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompany()
    {
      return $this->IsCompany;
    }

    /**
     * @param boolean $IsCompany
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setIsCompany($IsCompany)
    {
      $this->IsCompany = $IsCompany;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->Inactive;
    }

    /**
     * @param boolean $Inactive
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setInactive($Inactive)
    {
      $this->Inactive = $Inactive;
      return $this;
    }

    /**
     * @return ArrayOfClientRelationship
     */
    public function getClientRelationships()
    {
      return $this->ClientRelationships;
    }

    /**
     * @param ArrayOfClientRelationship $ClientRelationships
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setClientRelationships($ClientRelationships)
    {
      $this->ClientRelationships = $ClientRelationships;
      return $this;
    }

    /**
     * @return ArrayOfRep
     */
    public function getReps()
    {
      return $this->Reps;
    }

    /**
     * @param ArrayOfRep $Reps
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setReps($Reps)
    {
      $this->Reps = $Reps;
      return $this;
    }

    /**
     * @return ArrayOfSalesRep
     */
    public function getSaleReps()
    {
      return $this->SaleReps;
    }

    /**
     * @param ArrayOfSalesRep $SaleReps
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setSaleReps($SaleReps)
    {
      $this->SaleReps = $SaleReps;
      return $this;
    }

    /**
     * @return ArrayOfCustomClientField
     */
    public function getCustomClientFields()
    {
      return $this->CustomClientFields;
    }

    /**
     * @param ArrayOfCustomClientField $CustomClientFields
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setCustomClientFields($CustomClientFields)
    {
      $this->CustomClientFields = $CustomClientFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLiabilityRelease()
    {
      return $this->LiabilityRelease;
    }

    /**
     * @param boolean $LiabilityRelease
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setLiabilityRelease($LiabilityRelease)
    {
      $this->LiabilityRelease = $LiabilityRelease;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyContactInfoName()
    {
      return $this->EmergencyContactInfoName;
    }

    /**
     * @param string $EmergencyContactInfoName
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmergencyContactInfoName($EmergencyContactInfoName)
    {
      $this->EmergencyContactInfoName = $EmergencyContactInfoName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyContactInfoRelationship()
    {
      return $this->EmergencyContactInfoRelationship;
    }

    /**
     * @param string $EmergencyContactInfoRelationship
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmergencyContactInfoRelationship($EmergencyContactInfoRelationship)
    {
      $this->EmergencyContactInfoRelationship = $EmergencyContactInfoRelationship;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyContactInfoPhone()
    {
      return $this->EmergencyContactInfoPhone;
    }

    /**
     * @param string $EmergencyContactInfoPhone
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmergencyContactInfoPhone($EmergencyContactInfoPhone)
    {
      $this->EmergencyContactInfoPhone = $EmergencyContactInfoPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyContactInfoEmail()
    {
      return $this->EmergencyContactInfoEmail;
    }

    /**
     * @param string $EmergencyContactInfoEmail
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmergencyContactInfoEmail($EmergencyContactInfoEmail)
    {
      $this->EmergencyContactInfoEmail = $EmergencyContactInfoEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPromotionalEmailOptIn()
    {
      return $this->PromotionalEmailOptIn;
    }

    /**
     * @param boolean $PromotionalEmailOptIn
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setPromotionalEmailOptIn($PromotionalEmailOptIn)
    {
      $this->PromotionalEmailOptIn = $PromotionalEmailOptIn;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->CreationDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $CreationDate
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setCreationDate(\Carbon\Carbon $CreationDate = null)
    {
      if ($CreationDate == null) {
       $this->CreationDate = null;
      } else {
        $this->CreationDate = $CreationDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return Liability
     */
    public function getLiability()
    {
      return $this->Liability;
    }

    /**
     * @param Liability $Liability
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setLiability($Liability)
    {
      $this->Liability = $Liability;
      return $this;
    }

    /**
     * @return ProspectStage
     */
    public function getProspectStage()
    {
      return $this->ProspectStage;
    }

    /**
     * @param ProspectStage $ProspectStage
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setProspectStage($ProspectStage)
    {
      $this->ProspectStage = $ProspectStage;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueID()
    {
      return $this->UniqueID;
    }

    /**
     * @param int $UniqueID
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setUniqueID($UniqueID)
    {
      $this->UniqueID = $UniqueID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipIcon()
    {
      return $this->MembershipIcon;
    }

    /**
     * @param int $MembershipIcon
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setMembershipIcon($MembershipIcon)
    {
      $this->MembershipIcon = $MembershipIcon;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
      return $this->SiteId;
    }

    /**
     * @param int $SiteId
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setSiteId($SiteId)
    {
      $this->SiteId = $SiteId;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailOptIn()
    {
      return $this->EmailOptIn;
    }

    /**
     * @param boolean $EmailOptIn
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setEmailOptIn($EmailOptIn)
    {
      $this->EmailOptIn = $EmailOptIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
      return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
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
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setWorkPhone($WorkPhone)
    {
      $this->WorkPhone = $WorkPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkExtension()
    {
      return $this->WorkExtension;
    }

    /**
     * @param string $WorkExtension
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setWorkExtension($WorkExtension)
    {
      $this->WorkExtension = $WorkExtension;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getBirthDate()
    {
      if ($this->BirthDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->BirthDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $BirthDate
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setBirthDate(\Carbon\Carbon $BirthDate = null)
    {
      if ($BirthDate == null) {
       $this->BirthDate = null;
      } else {
        $this->BirthDate = $BirthDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getFirstAppointmentDate()
    {
      if ($this->FirstAppointmentDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->FirstAppointmentDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $FirstAppointmentDate
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setFirstAppointmentDate(\Carbon\Carbon $FirstAppointmentDate = null)
    {
      if ($FirstAppointmentDate == null) {
       $this->FirstAppointmentDate = null;
      } else {
        $this->FirstAppointmentDate = $FirstAppointmentDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReferredBy()
    {
      return $this->ReferredBy;
    }

    /**
     * @param string $ReferredBy
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setReferredBy($ReferredBy)
    {
      $this->ReferredBy = $ReferredBy;
      return $this;
    }

    /**
     * @return Location
     */
    public function getHomeLocation()
    {
      return $this->HomeLocation;
    }

    /**
     * @param Location $HomeLocation
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setHomeLocation($HomeLocation)
    {
      $this->HomeLocation = $HomeLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getYellowAlert()
    {
      return $this->YellowAlert;
    }

    /**
     * @param string $YellowAlert
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setYellowAlert($YellowAlert)
    {
      $this->YellowAlert = $YellowAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getRedAlert()
    {
      return $this->RedAlert;
    }

    /**
     * @param string $RedAlert
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setRedAlert($RedAlert)
    {
      $this->RedAlert = $RedAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhotoURL()
    {
      return $this->PhotoURL;
    }

    /**
     * @param string $PhotoURL
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setPhotoURL($PhotoURL)
    {
      $this->PhotoURL = $PhotoURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect()
    {
      return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setIsProspect($IsProspect)
    {
      $this->IsProspect = $IsProspect;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getLastModifiedDateTime()
    {
      if ($this->LastModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->LastModifiedDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $LastModifiedDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setLastModifiedDateTime(\Carbon\Carbon $LastModifiedDateTime = null)
    {
      if ($LastModifiedDateTime == null) {
       $this->LastModifiedDateTime = null;
      } else {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getContactMethod()
    {
      return $this->ContactMethod;
    }

    /**
     * @param int $ContactMethod
     * @return \Nlocascio\Mindbody\MBOSoap\Client
     */
    public function setContactMethod($ContactMethod)
    {
      $this->ContactMethod = $ContactMethod;
      return $this;
    }

}
