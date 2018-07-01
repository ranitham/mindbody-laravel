<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to sales.
 */
class Sale_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetAcceptedCardType' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAcceptedCardType',
  'GetAcceptedCardTypeRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAcceptedCardTypeRequest',
  'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
  'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
  'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
  'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
  'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
  'GetAcceptedCardTypeResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAcceptedCardTypeResponse',
  'GetAcceptedCardTypeResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAcceptedCardTypeResult',
  'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
  'CheckoutShoppingCart' => 'Nlocascio\\Mindbody\\MBOSoap\\CheckoutShoppingCart',
  'CheckoutShoppingCartRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\CheckoutShoppingCartRequest',
  'ArrayOfCartItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCartItem',
  'CartItem' => 'Nlocascio\\Mindbody\\MBOSoap\\CartItem',
  'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
  'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
  'ClassSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassSchedule',
  'ArrayOfClass' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClass',
  'Class' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassCustom',
  'ArrayOfVisit' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfVisit',
  'Visit' => 'Nlocascio\\Mindbody\\MBOSoap\\Visit',
  'Staff' => 'Nlocascio\\Mindbody\\MBOSoap\\Staff',
  'ArrayOfAppointment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAppointment',
  'Appointment' => 'Nlocascio\\Mindbody\\MBOSoap\\Appointment',
  'ScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ScheduleItem',
  'Unavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\Unavailability',
  'Availability' => 'Nlocascio\\Mindbody\\MBOSoap\\Availability',
  'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
  'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
  'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
  'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
  'Client' => 'Nlocascio\\Mindbody\\MBOSoap\\Client',
  'ArrayOfClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndex',
  'ClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndex',
  'ArrayOfClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndexValue',
  'ClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndexValue',
  'ClientCreditCard' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientCreditCard',
  'ArrayOfClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientRelationship',
  'ClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientRelationship',
  'Relationship' => 'Nlocascio\\Mindbody\\MBOSoap\\Relationship',
  'ArrayOfRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfRep',
  'Rep' => 'Nlocascio\\Mindbody\\MBOSoap\\Rep',
  'ArrayOfSalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSalesRep',
  'SalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\SalesRep',
  'ArrayOfCustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCustomClientField',
  'CustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\CustomClientField',
  'Liability' => 'Nlocascio\\Mindbody\\MBOSoap\\Liability',
  'ProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ProspectStage',
  'ClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientService',
  'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
  'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
  'ArrayOfUnavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUnavailability',
  'ArrayOfAvailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAvailability',
  'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
  'ArrayOfProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProviderIDUpdate',
  'ProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ProviderIDUpdate',
  'ArrayOfClient' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClient',
  'ClassDescription' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassDescription',
  'Level' => 'Nlocascio\\Mindbody\\MBOSoap\\Level',
  'Course' => 'Nlocascio\\Mindbody\\MBOSoap\\Course',
  'ShoppingCart' => 'Nlocascio\\Mindbody\\MBOSoap\\ShoppingCart',
  'Size' => 'Nlocascio\\Mindbody\\MBOSoap\\Size',
  'Color' => 'Nlocascio\\Mindbody\\MBOSoap\\Color',
  'Item' => 'Nlocascio\\Mindbody\\MBOSoap\\Item',
  'Tip' => 'Nlocascio\\Mindbody\\MBOSoap\\Tip',
  'Package' => 'Nlocascio\\Mindbody\\MBOSoap\\Package',
  'ArrayOfService' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfService',
  'Service' => 'Nlocascio\\Mindbody\\MBOSoap\\Service',
  'ArrayOfProduct' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProduct',
  'Product' => 'Nlocascio\\Mindbody\\MBOSoap\\Product',
  'ArrayOfLong' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLong',
  'ArrayOfPaymentInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPaymentInfo',
  'PaymentInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\PaymentInfo',
  'GiftCardInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\GiftCardInfo',
  'CheckInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\CheckInfo',
  'CashInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\CashInfo',
  'CompInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\CompInfo',
  'TrackDataInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\TrackDataInfo',
  'StoredCardInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\StoredCardInfo',
  'EncryptedTrackDataInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\EncryptedTrackDataInfo',
  'CustomPaymentInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\CustomPaymentInfo',
  'DebitAccountInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\DebitAccountInfo',
  'CreditCardInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\CreditCardInfo',
  'CheckoutShoppingCartResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\CheckoutShoppingCartResponse',
  'CheckoutShoppingCartResult' => 'Nlocascio\\Mindbody\\MBOSoap\\CheckoutShoppingCartResult',
  'ArrayOfClassSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClassSchedule',
  'GetSales' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSales',
  'GetSalesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesRequest',
  'GetSalesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesResponse',
  'GetSalesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesResult',
  'ArrayOfSale' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSale',
  'Sale' => 'Nlocascio\\Mindbody\\MBOSoap\\Sale',
  'ArrayOfPurchasedItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPurchasedItem',
  'PurchasedItem' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchasedItem',
  'ArrayOfPayment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPayment',
  'Payment' => 'Nlocascio\\Mindbody\\MBOSoap\\Payment',
  'GetServices' => 'Nlocascio\\Mindbody\\MBOSoap\\GetServices',
  'GetServicesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetServicesRequest',
  'GetServicesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetServicesResponse',
  'GetServicesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetServicesResult',
  'UpdateServices' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateServices',
  'UpdateServicesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateServicesRequest',
  'UpdateServicesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateServicesResponse',
  'UpdateServicesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateServicesResult',
  'GetPackages' => 'Nlocascio\\Mindbody\\MBOSoap\\GetPackages',
  'GetPackagesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetPackagesRequest',
  'GetPackagesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetPackagesResponse',
  'GetPackagesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetPackagesResult',
  'ArrayOfPackage' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPackage',
  'GetProducts' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProducts',
  'GetProductsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProductsRequest',
  'GetProductsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProductsResponse',
  'GetProductsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProductsResult',
  'UpdateProducts' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateProducts',
  'UpdateProductsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateProductsRequest',
  'UpdateProductsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateProductsResponse',
  'UpdateProductsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateProductsResult',
  'RedeemSpaFinderWellnessCard' => 'Nlocascio\\Mindbody\\MBOSoap\\RedeemSpaFinderWellnessCard',
  'RedeemSpaFinderWellnessCardRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\RedeemSpaFinderWellnessCardRequest',
  'RedeemSpaFinderWellnessCardResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\RedeemSpaFinderWellnessCardResponse',
  'RedeemSpaFinderWellnessCardResult' => 'Nlocascio\\Mindbody\\MBOSoap\\RedeemSpaFinderWellnessCardResult',
  'GetCustomPaymentMethods' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomPaymentMethods',
  'GetCustomPaymentMethodsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomPaymentMethodsRequest',
  'GetCustomPaymentMethodsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomPaymentMethodsResponse',
  'GetCustomPaymentMethodsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomPaymentMethodsResult',
  'ArrayOfCustomPaymentInfo' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCustomPaymentInfo',
  'ReturnSale' => 'Nlocascio\\Mindbody\\MBOSoap\\ReturnSale',
  'ReturnSaleRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\ReturnSaleRequest',
  'ReturnSaleResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\ReturnSaleResponse',
  'ReturnSaleResult' => 'Nlocascio\\Mindbody\\MBOSoap\\ReturnSaleResult',
  'UpdateSaleDate' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateSaleDate',
  'UpdateSaleDateRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateSaleDateRequest',
  'UpdateSaleDateResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateSaleDateResponse',
  'UpdateSaleDateResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateSaleDateResult',
  'GetContracts' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContracts',
  'GetContractsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContractsRequest',
  'GetContractsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContractsResponse',
  'GetContractsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContractsResult',
  'ArrayOfContract' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContract',
  'Contract' => 'Nlocascio\\Mindbody\\MBOSoap\\Contract',
  'ArrayOfContractItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContractItem',
  'ContractItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ContractItem',
  'AutopaySchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\AutopaySchedule',
  'ArrayOfMembershipTypeRestriction' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfMembershipTypeRestriction',
  'MembershipTypeRestriction' => 'Nlocascio\\Mindbody\\MBOSoap\\MembershipTypeRestriction',
  'PurchaseContracts' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchaseContracts',
  'PurchaseContractsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchaseContractsRequest',
  'PurchaseContractsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchaseContractsResponse',
  'PurchaseContractsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchaseContractsResult',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of card types that the site accepts.
     *
     * @param GetAcceptedCardType $parameters
     * @return GetAcceptedCardTypeResponse
     */
    public function GetAcceptedCardType(GetAcceptedCardType $parameters)
    {
      return $this->__soapCall('GetAcceptedCardType', array($parameters));
    }

    /**
     * Validates and completes a sale by processing all items added to a shopping cart.
     *
     * @param CheckoutShoppingCart $parameters
     * @return CheckoutShoppingCartResponse
     */
    public function CheckoutShoppingCart(CheckoutShoppingCart $parameters)
    {
      return $this->__soapCall('CheckoutShoppingCart', array($parameters));
    }

    /**
     * Gets a list of sales.
     *
     * @param GetSales $parameters
     * @return GetSalesResponse
     */
    public function GetSales(GetSales $parameters)
    {
      return $this->__soapCall('GetSales', array($parameters));
    }

    /**
     * Gets a list of services available for sale.
     *
     * @param GetServices $parameters
     * @return GetServicesResponse
     */
    public function GetServices(GetServices $parameters)
    {
      return $this->__soapCall('GetServices', array($parameters));
    }

    /**
     * Update select services information.
     *
     * @param UpdateServices $parameters
     * @return UpdateServicesResponse
     */
    public function UpdateServices(UpdateServices $parameters)
    {
      return $this->__soapCall('UpdateServices', array($parameters));
    }

    /**
     * Gets a list of packages available for sale.
     *
     * @param GetPackages $parameters
     * @return GetPackagesResponse
     */
    public function GetPackages(GetPackages $parameters)
    {
      return $this->__soapCall('GetPackages', array($parameters));
    }

    /**
     * Get a list of products available for sale.
     *
     * @param GetProducts $parameters
     * @return GetProductsResponse
     */
    public function GetProducts(GetProducts $parameters)
    {
      return $this->__soapCall('GetProducts', array($parameters));
    }

    /**
     * Update select products information.
     *
     * @param UpdateProducts $parameters
     * @return UpdateProductsResponse
     */
    public function UpdateProducts(UpdateProducts $parameters)
    {
      return $this->__soapCall('UpdateProducts', array($parameters));
    }

    /**
     * Redeem a Spa Finder Gift Card.
     *
     * @param RedeemSpaFinderWellnessCard $parameters
     * @return RedeemSpaFinderWellnessCardResponse
     */
    public function RedeemSpaFinderWellnessCard(RedeemSpaFinderWellnessCard $parameters)
    {
      return $this->__soapCall('RedeemSpaFinderWellnessCard', array($parameters));
    }

    /**
     * Gets a list of Custom Payment Methods.
     *
     * @param GetCustomPaymentMethods $parameters
     * @return GetCustomPaymentMethodsResponse
     */
    public function GetCustomPaymentMethods(GetCustomPaymentMethods $parameters)
    {
      return $this->__soapCall('GetCustomPaymentMethods', array($parameters));
    }

    /**
     * Return a sale used in business mode. This only supports comp payment method.
     *
     * @param ReturnSale $parameters
     * @return ReturnSaleResponse
     */
    public function ReturnSale(ReturnSale $parameters)
    {
      return $this->__soapCall('ReturnSale', array($parameters));
    }

    /**
     * Modify sale date in business mode
     *
     * @param UpdateSaleDate $parameters
     * @return UpdateSaleDateResponse
     */
    public function UpdateSaleDate(UpdateSaleDate $parameters)
    {
      return $this->__soapCall('UpdateSaleDate', array($parameters));
    }

    /**
     * Gets a list of contracts for a given location.
     *
     * @param GetContracts $parameters
     * @return GetContractsResponse
     */
    public function GetContracts(GetContracts $parameters)
    {
      return $this->__soapCall('GetContracts', array($parameters));
    }

    /**
     * Purchase a contract.
     *
     * @param PurchaseContracts $parameters
     * @return PurchaseContractsResponse
     */
    public function PurchaseContracts(PurchaseContracts $parameters)
    {
      return $this->__soapCall('PurchaseContracts', array($parameters));
    }

}
