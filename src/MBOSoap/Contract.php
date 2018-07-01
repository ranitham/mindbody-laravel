<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Contract extends MBObject
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
     * @var int $AssignsMembershipId
     */
    public $AssignsMembershipId = null;

    /**
     * @var string $AssignsMembershipName
     */
    public $AssignsMembershipName = null;

    /**
     * @var boolean $SoldOnline
     */
    public $SoldOnline = null;

    /**
     * @var ArrayOfContractItem $ContractItems
     */
    public $ContractItems = null;

    /**
     * @var string $IntroOffer
     */
    public $IntroOffer = null;

    /**
     * @var AutopaySchedule $AutopaySchedule
     */
    public $AutopaySchedule = null;

    /**
     * @var int $NumberOfAutopays
     */
    public $NumberOfAutopays = null;

    /**
     * @var string $AutopayTriggerType
     */
    public $AutopayTriggerType = null;

    /**
     * @var string $ActionUponCompletionOfAutopays
     */
    public $ActionUponCompletionOfAutopays = null;

    /**
     * @var string $ClientsChargedOn
     */
    public $ClientsChargedOn = null;

    /**
     * @var \Carbon\Carbon $ClientsChargedOnSpecificDate
     */
    public $ClientsChargedOnSpecificDate = null;

    /**
     * @var float $DiscountAmount
     */
    public $DiscountAmount = null;

    /**
     * @var float $DepositAmount
     */
    public $DepositAmount = null;

    /**
     * @var boolean $FirstAutopayFree
     */
    public $FirstAutopayFree = null;

    /**
     * @var boolean $LastAutopayFree
     */
    public $LastAutopayFree = null;

    /**
     * @var boolean $ClientTerminateOnline
     */
    public $ClientTerminateOnline = null;

    /**
     * @var ArrayOfMembershipTypeRestriction $MembershipTypeRestrictions
     */
    public $MembershipTypeRestrictions = null;

    /**
     * @var ArrayOfInt $LocationPurchaseRestrictionIds
     */
    public $LocationPurchaseRestrictionIds = null;

    /**
     * @var string $AgreementTerms
     */
    public $AgreementTerms = null;

    /**
     * @var boolean $RequiresElectronicConfirmation
     */
    public $RequiresElectronicConfirmation = null;

    /**
     * @var boolean $AutopayEnabled
     */
    public $AutopayEnabled = null;

    /**
     * @var float $FirstPaymentAmountSubtotal
     */
    public $FirstPaymentAmountSubtotal = null;

    /**
     * @var float $FirstPaymentAmountTax
     */
    public $FirstPaymentAmountTax = null;

    /**
     * @var float $FirstPaymentAmountTotal
     */
    public $FirstPaymentAmountTotal = null;

    /**
     * @var float $RecurringPaymentAmountSubtotal
     */
    public $RecurringPaymentAmountSubtotal = null;

    /**
     * @var float $RecurringPaymentAmountTax
     */
    public $RecurringPaymentAmountTax = null;

    /**
     * @var float $RecurringPaymentAmountTotal
     */
    public $RecurringPaymentAmountTotal = null;

    /**
     * @var float $TotalContractAmountSubtotal
     */
    public $TotalContractAmountSubtotal = null;

    /**
     * @var float $TotalContractAmountTax
     */
    public $TotalContractAmountTax = null;

    /**
     * @var float $TotalContractAmountTotal
     */
    public $TotalContractAmountTotal = null;

    /**
     * @param boolean $SoldOnline
     * @param float $DiscountAmount
     * @param float $DepositAmount
     * @param boolean $FirstAutopayFree
     * @param boolean $LastAutopayFree
     * @param boolean $ClientTerminateOnline
     * @param boolean $RequiresElectronicConfirmation
     * @param boolean $AutopayEnabled
     * @param float $FirstPaymentAmountSubtotal
     * @param float $FirstPaymentAmountTax
     * @param float $FirstPaymentAmountTotal
     * @param float $RecurringPaymentAmountSubtotal
     * @param float $RecurringPaymentAmountTax
     * @param float $RecurringPaymentAmountTotal
     * @param float $TotalContractAmountSubtotal
     * @param float $TotalContractAmountTax
     * @param float $TotalContractAmountTotal
     */
    public function __construct($SoldOnline, $DiscountAmount, $DepositAmount, $FirstAutopayFree, $LastAutopayFree, $ClientTerminateOnline, $RequiresElectronicConfirmation, $AutopayEnabled, $FirstPaymentAmountSubtotal, $FirstPaymentAmountTax, $FirstPaymentAmountTotal, $RecurringPaymentAmountSubtotal, $RecurringPaymentAmountTax, $RecurringPaymentAmountTotal, $TotalContractAmountSubtotal, $TotalContractAmountTax, $TotalContractAmountTotal)
    {
      parent::__construct();
      $this->SoldOnline = $SoldOnline;
      $this->DiscountAmount = $DiscountAmount;
      $this->DepositAmount = $DepositAmount;
      $this->FirstAutopayFree = $FirstAutopayFree;
      $this->LastAutopayFree = $LastAutopayFree;
      $this->ClientTerminateOnline = $ClientTerminateOnline;
      $this->RequiresElectronicConfirmation = $RequiresElectronicConfirmation;
      $this->AutopayEnabled = $AutopayEnabled;
      $this->FirstPaymentAmountSubtotal = $FirstPaymentAmountSubtotal;
      $this->FirstPaymentAmountTax = $FirstPaymentAmountTax;
      $this->FirstPaymentAmountTotal = $FirstPaymentAmountTotal;
      $this->RecurringPaymentAmountSubtotal = $RecurringPaymentAmountSubtotal;
      $this->RecurringPaymentAmountTax = $RecurringPaymentAmountTax;
      $this->RecurringPaymentAmountTotal = $RecurringPaymentAmountTotal;
      $this->TotalContractAmountSubtotal = $TotalContractAmountSubtotal;
      $this->TotalContractAmountTax = $TotalContractAmountTax;
      $this->TotalContractAmountTotal = $TotalContractAmountTotal;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
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
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
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
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssignsMembershipId()
    {
      return $this->AssignsMembershipId;
    }

    /**
     * @param int $AssignsMembershipId
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAssignsMembershipId($AssignsMembershipId)
    {
      $this->AssignsMembershipId = $AssignsMembershipId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssignsMembershipName()
    {
      return $this->AssignsMembershipName;
    }

    /**
     * @param string $AssignsMembershipName
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAssignsMembershipName($AssignsMembershipName)
    {
      $this->AssignsMembershipName = $AssignsMembershipName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOnline()
    {
      return $this->SoldOnline;
    }

    /**
     * @param boolean $SoldOnline
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setSoldOnline($SoldOnline)
    {
      $this->SoldOnline = $SoldOnline;
      return $this;
    }

    /**
     * @return ArrayOfContractItem
     */
    public function getContractItems()
    {
      return $this->ContractItems;
    }

    /**
     * @param ArrayOfContractItem $ContractItems
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setContractItems($ContractItems)
    {
      $this->ContractItems = $ContractItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntroOffer()
    {
      return $this->IntroOffer;
    }

    /**
     * @param string $IntroOffer
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setIntroOffer($IntroOffer)
    {
      $this->IntroOffer = $IntroOffer;
      return $this;
    }

    /**
     * @return AutopaySchedule
     */
    public function getAutopaySchedule()
    {
      return $this->AutopaySchedule;
    }

    /**
     * @param AutopaySchedule $AutopaySchedule
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAutopaySchedule($AutopaySchedule)
    {
      $this->AutopaySchedule = $AutopaySchedule;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAutopays()
    {
      return $this->NumberOfAutopays;
    }

    /**
     * @param int $NumberOfAutopays
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setNumberOfAutopays($NumberOfAutopays)
    {
      $this->NumberOfAutopays = $NumberOfAutopays;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutopayTriggerType()
    {
      return $this->AutopayTriggerType;
    }

    /**
     * @param string $AutopayTriggerType
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAutopayTriggerType($AutopayTriggerType)
    {
      $this->AutopayTriggerType = $AutopayTriggerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionUponCompletionOfAutopays()
    {
      return $this->ActionUponCompletionOfAutopays;
    }

    /**
     * @param string $ActionUponCompletionOfAutopays
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setActionUponCompletionOfAutopays($ActionUponCompletionOfAutopays)
    {
      $this->ActionUponCompletionOfAutopays = $ActionUponCompletionOfAutopays;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientsChargedOn()
    {
      return $this->ClientsChargedOn;
    }

    /**
     * @param string $ClientsChargedOn
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setClientsChargedOn($ClientsChargedOn)
    {
      $this->ClientsChargedOn = $ClientsChargedOn;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getClientsChargedOnSpecificDate()
    {
      if ($this->ClientsChargedOnSpecificDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->ClientsChargedOnSpecificDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $ClientsChargedOnSpecificDate
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setClientsChargedOnSpecificDate(\Carbon\Carbon $ClientsChargedOnSpecificDate = null)
    {
      if ($ClientsChargedOnSpecificDate == null) {
       $this->ClientsChargedOnSpecificDate = null;
      } else {
        $this->ClientsChargedOnSpecificDate = $ClientsChargedOnSpecificDate->format(\Carbon\Carbon::ATOM);
      }
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
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param float $DepositAmount
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirstAutopayFree()
    {
      return $this->FirstAutopayFree;
    }

    /**
     * @param boolean $FirstAutopayFree
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setFirstAutopayFree($FirstAutopayFree)
    {
      $this->FirstAutopayFree = $FirstAutopayFree;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLastAutopayFree()
    {
      return $this->LastAutopayFree;
    }

    /**
     * @param boolean $LastAutopayFree
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setLastAutopayFree($LastAutopayFree)
    {
      $this->LastAutopayFree = $LastAutopayFree;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClientTerminateOnline()
    {
      return $this->ClientTerminateOnline;
    }

    /**
     * @param boolean $ClientTerminateOnline
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setClientTerminateOnline($ClientTerminateOnline)
    {
      $this->ClientTerminateOnline = $ClientTerminateOnline;
      return $this;
    }

    /**
     * @return ArrayOfMembershipTypeRestriction
     */
    public function getMembershipTypeRestrictions()
    {
      return $this->MembershipTypeRestrictions;
    }

    /**
     * @param ArrayOfMembershipTypeRestriction $MembershipTypeRestrictions
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setMembershipTypeRestrictions($MembershipTypeRestrictions)
    {
      $this->MembershipTypeRestrictions = $MembershipTypeRestrictions;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationPurchaseRestrictionIds()
    {
      return $this->LocationPurchaseRestrictionIds;
    }

    /**
     * @param ArrayOfInt $LocationPurchaseRestrictionIds
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setLocationPurchaseRestrictionIds($LocationPurchaseRestrictionIds)
    {
      $this->LocationPurchaseRestrictionIds = $LocationPurchaseRestrictionIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgreementTerms()
    {
      return $this->AgreementTerms;
    }

    /**
     * @param string $AgreementTerms
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAgreementTerms($AgreementTerms)
    {
      $this->AgreementTerms = $AgreementTerms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiresElectronicConfirmation()
    {
      return $this->RequiresElectronicConfirmation;
    }

    /**
     * @param boolean $RequiresElectronicConfirmation
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setRequiresElectronicConfirmation($RequiresElectronicConfirmation)
    {
      $this->RequiresElectronicConfirmation = $RequiresElectronicConfirmation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutopayEnabled()
    {
      return $this->AutopayEnabled;
    }

    /**
     * @param boolean $AutopayEnabled
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setAutopayEnabled($AutopayEnabled)
    {
      $this->AutopayEnabled = $AutopayEnabled;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountSubtotal()
    {
      return $this->FirstPaymentAmountSubtotal;
    }

    /**
     * @param float $FirstPaymentAmountSubtotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setFirstPaymentAmountSubtotal($FirstPaymentAmountSubtotal)
    {
      $this->FirstPaymentAmountSubtotal = $FirstPaymentAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountTax()
    {
      return $this->FirstPaymentAmountTax;
    }

    /**
     * @param float $FirstPaymentAmountTax
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setFirstPaymentAmountTax($FirstPaymentAmountTax)
    {
      $this->FirstPaymentAmountTax = $FirstPaymentAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountTotal()
    {
      return $this->FirstPaymentAmountTotal;
    }

    /**
     * @param float $FirstPaymentAmountTotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setFirstPaymentAmountTotal($FirstPaymentAmountTotal)
    {
      $this->FirstPaymentAmountTotal = $FirstPaymentAmountTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountSubtotal()
    {
      return $this->RecurringPaymentAmountSubtotal;
    }

    /**
     * @param float $RecurringPaymentAmountSubtotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setRecurringPaymentAmountSubtotal($RecurringPaymentAmountSubtotal)
    {
      $this->RecurringPaymentAmountSubtotal = $RecurringPaymentAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountTax()
    {
      return $this->RecurringPaymentAmountTax;
    }

    /**
     * @param float $RecurringPaymentAmountTax
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setRecurringPaymentAmountTax($RecurringPaymentAmountTax)
    {
      $this->RecurringPaymentAmountTax = $RecurringPaymentAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountTotal()
    {
      return $this->RecurringPaymentAmountTotal;
    }

    /**
     * @param float $RecurringPaymentAmountTotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setRecurringPaymentAmountTotal($RecurringPaymentAmountTotal)
    {
      $this->RecurringPaymentAmountTotal = $RecurringPaymentAmountTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountSubtotal()
    {
      return $this->TotalContractAmountSubtotal;
    }

    /**
     * @param float $TotalContractAmountSubtotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setTotalContractAmountSubtotal($TotalContractAmountSubtotal)
    {
      $this->TotalContractAmountSubtotal = $TotalContractAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountTax()
    {
      return $this->TotalContractAmountTax;
    }

    /**
     * @param float $TotalContractAmountTax
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setTotalContractAmountTax($TotalContractAmountTax)
    {
      $this->TotalContractAmountTax = $TotalContractAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountTotal()
    {
      return $this->TotalContractAmountTotal;
    }

    /**
     * @param float $TotalContractAmountTotal
     * @return \Nlocascio\Mindbody\MBOSoap\Contract
     */
    public function setTotalContractAmountTotal($TotalContractAmountTotal)
    {
      $this->TotalContractAmountTotal = $TotalContractAmountTotal;
      return $this;
    }

}
