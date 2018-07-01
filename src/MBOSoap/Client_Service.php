<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to clients.
 */
class Client_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'AddArrival' => 'Nlocascio\\Mindbody\\MBOSoap\\AddArrival',
  'AddArrivalRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddArrivalRequest',
  'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
  'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
  'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
  'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
  'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
  'AddArrivalResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddArrivalResponse',
  'AddArrivalResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddArrivalResult',
  'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
  'ClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientService',
  'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
  'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
  'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
  'AddOrUpdateClients' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateClients',
  'AddOrUpdateClientsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateClientsRequest',
  'ArrayOfClient' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClient',
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
  'Staff' => 'Nlocascio\\Mindbody\\MBOSoap\\Staff',
  'ArrayOfAppointment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAppointment',
  'Appointment' => 'Nlocascio\\Mindbody\\MBOSoap\\Appointment',
  'ScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ScheduleItem',
  'Unavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\Unavailability',
  'Availability' => 'Nlocascio\\Mindbody\\MBOSoap\\Availability',
  'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
  'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
  'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
  'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
  'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
  'ArrayOfUnavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUnavailability',
  'ArrayOfAvailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAvailability',
  'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
  'ArrayOfProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProviderIDUpdate',
  'ProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ProviderIDUpdate',
  'ArrayOfSalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSalesRep',
  'SalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\SalesRep',
  'ArrayOfCustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCustomClientField',
  'CustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\CustomClientField',
  'Liability' => 'Nlocascio\\Mindbody\\MBOSoap\\Liability',
  'ProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ProspectStage',
  'AddOrUpdateClientsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateClientsResponse',
  'AddOrUpdateClientsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateClientsResult',
  'UpdateClientCrossRegional' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientCrossRegional',
  'UpdateClientCrossRegionalRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientCrossRegionalRequest',
  'UpdateClientCrossRegionalResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientCrossRegionalResponse',
  'UpdateClientCrossRegionalResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientCrossRegionalResult',
  'GetClients' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClients',
  'GetClientsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientsRequest',
  'GetClientsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientsResponse',
  'GetClientsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientsResult',
  'GetCrossRegionalClientAssociations' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCrossRegionalClientAssociations',
  'GetCrossRegionalClientAssociationsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCrossRegionalClientAssociationsRequest',
  'GetCrossRegionalClientAssociationsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCrossRegionalClientAssociationsResponse',
  'GetCrossRegionalClientAssociationsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCrossRegionalClientAssociationsResult',
  'ArrayOfCrossRegionalAssociation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCrossRegionalAssociation',
  'CrossRegionalAssociation' => 'Nlocascio\\Mindbody\\MBOSoap\\CrossRegionalAssociation',
  'GetCustomClientFields' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomClientFields',
  'GetCustomClientFieldsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomClientFieldsRequest',
  'GetCustomClientFieldsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomClientFieldsResponse',
  'GetCustomClientFieldsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCustomClientFieldsResult',
  'GetClientIndexes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientIndexes',
  'GetClientIndexesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientIndexesRequest',
  'GetClientIndexesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientIndexesResponse',
  'GetClientIndexesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientIndexesResult',
  'GetClientContactLogs' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContactLogs',
  'GetClientContactLogsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContactLogsRequest',
  'ArrayOfLong' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLong',
  'GetClientContactLogsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContactLogsResponse',
  'GetClientContactLogsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContactLogsResult',
  'ArrayOfContactLog' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContactLog',
  'ContactLog' => 'Nlocascio\\Mindbody\\MBOSoap\\ContactLog',
  'ArrayOfContactLogComment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContactLogComment',
  'ContactLogComment' => 'Nlocascio\\Mindbody\\MBOSoap\\ContactLogComment',
  'ArrayOfContactLogType' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContactLogType',
  'ContactLogType' => 'Nlocascio\\Mindbody\\MBOSoap\\ContactLogType',
  'ArrayOfContactLogSubtype' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfContactLogSubtype',
  'ContactLogSubtype' => 'Nlocascio\\Mindbody\\MBOSoap\\ContactLogSubtype',
  'AddOrUpdateContactLogs' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateContactLogs',
  'AddOrUpdateContactLogsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateContactLogsRequest',
  'AddOrUpdateContactLogsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateContactLogsResponse',
  'AddOrUpdateContactLogsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateContactLogsResult',
  'GetContactLogTypes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContactLogTypes',
  'GetContactLogTypesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContactLogTypesRequest',
  'GetContactLogTypesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContactLogTypesResponse',
  'GetContactLogTypesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetContactLogTypesResult',
  'UploadClientDocument' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientDocument',
  'UploadClientDocumentRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientDocumentRequest',
  'UploadClientDocumentResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientDocumentResponse',
  'UploadClientDocumentResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientDocumentResult',
  'UploadClientPhoto' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientPhoto',
  'UploadClientPhotoRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientPhotoRequest',
  'UploadClientPhotoResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientPhotoResponse',
  'UploadClientPhotoResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UploadClientPhotoResult',
  'GetClientFormulaNotes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientFormulaNotes',
  'GetClientFormulaNotesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientFormulaNotesRequest',
  'GetClientFormulaNotesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientFormulaNotesResponse',
  'GetClientFormulaNotesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientFormulaNotesResult',
  'ArrayOfFormulaNote' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfFormulaNote',
  'FormulaNote' => 'Nlocascio\\Mindbody\\MBOSoap\\FormulaNote',
  'AddClientFormulaNote' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientFormulaNote',
  'AddClientFormulaNoteRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientFormulaNoteRequest',
  'AddClientFormulaNoteResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientFormulaNoteResponse',
  'AddClientFormulaNoteResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientFormulaNoteResult',
  'DeleteClientFormulaNote' => 'Nlocascio\\Mindbody\\MBOSoap\\DeleteClientFormulaNote',
  'DeleteCientFormulaNoteRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\DeleteCientFormulaNoteRequest',
  'DeleteClientFormulaNoteResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\DeleteClientFormulaNoteResponse',
  'DeleteClientFormulaNoteResult' => 'Nlocascio\\Mindbody\\MBOSoap\\DeleteClientFormulaNoteResult',
  'GetClientReferralTypes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientReferralTypes',
  'GetClientReferralTypesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientReferralTypesRequest',
  'GetClientReferralTypesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientReferralTypesResponse',
  'GetClientReferralTypesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientReferralTypesResult',
  'GetActiveClientMemberships' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveClientMemberships',
  'GetActiveClientMembershipsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveClientMembershipsRequest',
  'GetActiveClientMembershipsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveClientMembershipsResponse',
  'GetActiveClientMembershipsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveClientMembershipsResult',
  'ArrayOfClientMembership' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientMembership',
  'ClientMembership' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientMembership',
  'GetClientContracts' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContracts',
  'GetClientContractsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContractsRequest',
  'CrossRegionalRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\CrossRegionalRequest',
  'PagedBySitesMBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\PagedBySitesMBRequest',
  'GetClientContractsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContractsResponse',
  'GetClientContractsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientContractsResult',
  'PagedBySitesMBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\PagedBySitesMBResult',
  'ArrayOfClientContract' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientContract',
  'ClientContract' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientContract',
  'ArrayOfUpcomingAutopayEvent' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUpcomingAutopayEvent',
  'UpcomingAutopayEvent' => 'Nlocascio\\Mindbody\\MBOSoap\\UpcomingAutopayEvent',
  'GetClientAccountBalances' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientAccountBalances',
  'GetClientAccountBalancesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientAccountBalancesRequest',
  'GetClientAccountBalancesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientAccountBalancesResponse',
  'GetClientAccountBalancesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientAccountBalancesResult',
  'GetClientServices' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientServices',
  'GetClientServicesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientServicesRequest',
  'GetClientServicesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientServicesResponse',
  'GetClientServicesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientServicesResult',
  'ArrayOfClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientService',
  'GetClientVisits' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientVisits',
  'GetClientVisitsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientVisitsRequest',
  'GetClientVisitsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientVisitsResponse',
  'GetClientVisitsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientVisitsResult',
  'ArrayOfVisit' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfVisit',
  'Visit' => 'Nlocascio\\Mindbody\\MBOSoap\\Visit',
  'GetClientPurchases' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientPurchases',
  'GetClientPurchasesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientPurchasesRequest',
  'GetClientPurchasesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientPurchasesResponse',
  'GetClientPurchasesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientPurchasesResult',
  'ArrayOfSaleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSaleItem',
  'SaleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\SaleItem',
  'Sale' => 'Nlocascio\\Mindbody\\MBOSoap\\Sale',
  'ArrayOfPurchasedItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPurchasedItem',
  'PurchasedItem' => 'Nlocascio\\Mindbody\\MBOSoap\\PurchasedItem',
  'ArrayOfPayment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPayment',
  'Payment' => 'Nlocascio\\Mindbody\\MBOSoap\\Payment',
  'GetClientSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientSchedule',
  'GetClientScheduleRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientScheduleRequest',
  'GetClientScheduleResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientScheduleResponse',
  'GetClientScheduleResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClientScheduleResult',
  'GetRequiredClientFields' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRequiredClientFields',
  'GetRequiredClientFieldsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRequiredClientFieldsRequest',
  'GetRequiredClientFieldsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRequiredClientFieldsResponse',
  'GetRequiredClientFieldsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRequiredClientFieldsResult',
  'ValidateLogin' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLogin',
  'ValidateLoginRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLoginRequest',
  'ValidateLoginResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLoginResponse',
  'ValidateLoginResult' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLoginResult',
  'UpdateClientServices' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientServices',
  'UpdateClientServicesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientServicesRequest',
  'UpdateClientServicesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientServicesResponse',
  'UpdateClientServicesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientServicesResult',
  'SendUserNewPassword' => 'Nlocascio\\Mindbody\\MBOSoap\\SendUserNewPassword',
  'ClientSendUserNewPasswordRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientSendUserNewPasswordRequest',
  'SendUserNewPasswordResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\SendUserNewPasswordResponse',
  'ClientSendUserNewPasswordResult' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientSendUserNewPasswordResult',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/ClientService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Adds an arrival record for the given client.
     *
     * @param AddArrival $parameters
     * @return AddArrivalResponse
     */
    public function AddArrival(AddArrival $parameters)
    {
      return $this->__soapCall('AddArrival', array($parameters));
    }

    /**
     * Adds or updates information for a list of clients.
     *
     * @param AddOrUpdateClients $parameters
     * @return AddOrUpdateClientsResponse
     */
    public function AddOrUpdateClients(AddOrUpdateClients $parameters)
    {
      return $this->__soapCall('AddOrUpdateClients', array($parameters));
    }

    /**
     * Updates a client's information and any cross-regional clients' information
     *
     * @param UpdateClientCrossRegional $parameters
     * @return UpdateClientCrossRegionalResponse
     */
    public function UpdateClientCrossRegional(UpdateClientCrossRegional $parameters)
    {
      return $this->__soapCall('UpdateClientCrossRegional', array($parameters));
    }

    /**
     * Gets a list of clients.
     *
     * @param GetClients $parameters
     * @return GetClientsResponse
     */
    public function GetClients(GetClients $parameters)
    {
      return $this->__soapCall('GetClients', array($parameters));
    }

    /**
     * Gets a list of Client IDs representing the same client at different sites within the region.
     *
     * @param GetCrossRegionalClientAssociations $parameters
     * @return GetCrossRegionalClientAssociationsResponse
     */
    public function GetCrossRegionalClientAssociations(GetCrossRegionalClientAssociations $parameters)
    {
      return $this->__soapCall('GetCrossRegionalClientAssociations', array($parameters));
    }

    /**
     * Gets a list of currently available client indexes.
     *
     * @param GetCustomClientFields $parameters
     * @return GetCustomClientFieldsResponse
     */
    public function GetCustomClientFields(GetCustomClientFields $parameters)
    {
      return $this->__soapCall('GetCustomClientFields', array($parameters));
    }

    /**
     * Gets a list of currently available client indexes.
     *
     * @param GetClientIndexes $parameters
     * @return GetClientIndexesResponse
     */
    public function GetClientIndexes(GetClientIndexes $parameters)
    {
      return $this->__soapCall('GetClientIndexes', array($parameters));
    }

    /**
     * Get contact logs for a client.
     *
     * @param GetClientContactLogs $parameters
     * @return GetClientContactLogsResponse
     */
    public function GetClientContactLogs(GetClientContactLogs $parameters)
    {
      return $this->__soapCall('GetClientContactLogs', array($parameters));
    }

    /**
     * Add or update client contact logs.
     *
     * @param AddOrUpdateContactLogs $parameters
     * @return AddOrUpdateContactLogsResponse
     */
    public function AddOrUpdateContactLogs(AddOrUpdateContactLogs $parameters)
    {
      return $this->__soapCall('AddOrUpdateContactLogs', array($parameters));
    }

    /**
     * Get contact log types for a client.
     *
     * @param GetContactLogTypes $parameters
     * @return GetContactLogTypesResponse
     */
    public function GetContactLogTypes(GetContactLogTypes $parameters)
    {
      return $this->__soapCall('GetContactLogTypes', array($parameters));
    }

    /**
     * Upload a client document.
     *
     * @param UploadClientDocument $parameters
     * @return UploadClientDocumentResponse
     */
    public function UploadClientDocument(UploadClientDocument $parameters)
    {
      return $this->__soapCall('UploadClientDocument', array($parameters));
    }

    /**
     * Upload a client photo.
     *
     * @param UploadClientPhoto $parameters
     * @return UploadClientPhotoResponse
     */
    public function UploadClientPhoto(UploadClientPhoto $parameters)
    {
      return $this->__soapCall('UploadClientPhoto', array($parameters));
    }

    /**
     * Gets a list of client formula notes.
     *
     * @param GetClientFormulaNotes $parameters
     * @return GetClientFormulaNotesResponse
     */
    public function GetClientFormulaNotes(GetClientFormulaNotes $parameters)
    {
      return $this->__soapCall('GetClientFormulaNotes', array($parameters));
    }

    /**
     * Adds a formula note to a client.
     *
     * @param AddClientFormulaNote $parameters
     * @return AddClientFormulaNoteResponse
     */
    public function AddClientFormulaNote(AddClientFormulaNote $parameters)
    {
      return $this->__soapCall('AddClientFormulaNote', array($parameters));
    }

    /**
     * Deletes a formula note to a client.
     *
     * @param DeleteClientFormulaNote $parameters
     * @return DeleteClientFormulaNoteResponse
     */
    public function DeleteClientFormulaNote(DeleteClientFormulaNote $parameters)
    {
      return $this->__soapCall('DeleteClientFormulaNote', array($parameters));
    }

    /**
     * Gets a list of clients.
     *
     * @param GetClientReferralTypes $parameters
     * @return GetClientReferralTypesResponse
     */
    public function GetClientReferralTypes(GetClientReferralTypes $parameters)
    {
      return $this->__soapCall('GetClientReferralTypes', array($parameters));
    }

    /**
     * Gets the active membership for a given client.
     *
     * @param GetActiveClientMemberships $parameters
     * @return GetActiveClientMembershipsResponse
     */
    public function GetActiveClientMemberships(GetActiveClientMemberships $parameters)
    {
      return $this->__soapCall('GetActiveClientMemberships', array($parameters));
    }

    /**
     * Gets a list of contracts for a given client.
     *
     * @param GetClientContracts $parameters
     * @return GetClientContractsResponse
     */
    public function GetClientContracts(GetClientContracts $parameters)
    {
      return $this->__soapCall('GetClientContracts', array($parameters));
    }

    /**
     * Gets account balances for the given clients.
     *
     * @param GetClientAccountBalances $parameters
     * @return GetClientAccountBalancesResponse
     */
    public function GetClientAccountBalances(GetClientAccountBalances $parameters)
    {
      return $this->__soapCall('GetClientAccountBalances', array($parameters));
    }

    /**
     * Gets a client service for a given client.
     *
     * @param GetClientServices $parameters
     * @return GetClientServicesResponse
     */
    public function GetClientServices(GetClientServices $parameters)
    {
      return $this->__soapCall('GetClientServices', array($parameters));
    }

    /**
     * Get visits for a client.
     *
     * @param GetClientVisits $parameters
     * @return GetClientVisitsResponse
     */
    public function GetClientVisits(GetClientVisits $parameters)
    {
      return $this->__soapCall('GetClientVisits', array($parameters));
    }

    /**
     * Get purchases for a client.
     *
     * @param GetClientPurchases $parameters
     * @return GetClientPurchasesResponse
     */
    public function GetClientPurchases(GetClientPurchases $parameters)
    {
      return $this->__soapCall('GetClientPurchases', array($parameters));
    }

    /**
     * Get visits for a client.
     *
     * @param GetClientSchedule $parameters
     * @return GetClientScheduleResponse
     */
    public function GetClientSchedule(GetClientSchedule $parameters)
    {
      return $this->__soapCall('GetClientSchedule', array($parameters));
    }

    /**
     * Updates a client service for a given client.
     *
     * @param GetRequiredClientFields $parameters
     * @return GetRequiredClientFieldsResponse
     */
    public function GetRequiredClientFields(GetRequiredClientFields $parameters)
    {
      return $this->__soapCall('GetRequiredClientFields', array($parameters));
    }

    /**
     * Validates a username and password. This method returns the associated clients record and a session GUID on success.
     *
     * @param ValidateLogin $parameters
     * @return ValidateLoginResponse
     */
    public function ValidateLogin(ValidateLogin $parameters)
    {
      return $this->__soapCall('ValidateLogin', array($parameters));
    }

    /**
     * Updates a client service for a given client.
     *
     * @param UpdateClientServices $parameters
     * @return UpdateClientServicesResponse
     */
    public function UpdateClientServices(UpdateClientServices $parameters)
    {
      return $this->__soapCall('UpdateClientServices', array($parameters));
    }

    /**
     * Sends the user a new password.
     *
     * @param SendUserNewPassword $parameters
     * @return SendUserNewPasswordResponse
     */
    public function SendUserNewPassword(SendUserNewPassword $parameters)
    {
      return $this->__soapCall('SendUserNewPassword', array($parameters));
    }

}
