<?php

namespace Nlocascio\Mindbody;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use Nlocascio\Mindbody\Traits\ProvidesMindbodyCredentials;
use Nlocascio\Mindbody\Traits\ProvidesSoapClient;
use Nlocascio\Mindbody\Traits\ValidatesApiResponses;
use Illuminate\Support\Facades\Log;
use DOMDocument;

/**
 * Class Mindbody
 * @package Nlocascio\Mindbody
 * @method MBOSoap\AddArrivalResult AddArrival(MBOSoap\AddArrivalRequest $parameters)
 * @method MBOSoap\AddClientFormulaNoteResult AddClientFormulaNote(MBOSoap\AddClientFormulaNoteRequest $parameters)
 * @method MBOSoap\AddClientsToClassesResult AddClientsToClasses(MBOSoap\AddClientsToClassesRequest $parameters)
 * @method MBOSoap\AddClientsToEnrollmentsResult AddClientsToEnrollments(MBOSoap\AddClientsToEnrollmentsRequest $parameters)
 * @method MBOSoap\AddClientsToClassesResult AddClientToClass(MBOSoap\AddClientToClassRequest $parameters)
 * @method MBOSoap\AddOrUpdateAppointmentsResult AddOrUpdateAppointments(MBOSoap\AddOrUpdateAppointmentsRequest $parameters)
 * @method MBOSoap\AddOrUpdateAvailabilitiesResult AddOrUpdateAvailabilities(MBOSoap\AddOrUpdateAvailabilitiesRequest $parameters)
 * @method MBOSoap\AddOrUpdateClientsResult AddOrUpdateClients(MBOSoap\AddOrUpdateClientsRequest $parameters)
 * @method MBOSoap\AddOrUpdateContactLogsResult AddOrUpdateContactLogs(MBOSoap\AddOrUpdateContactLogsRequest $parameters)
 * @method MBOSoap\AddOrUpdateStaffResult AddOrUpdateStaff(MBOSoap\AddOrUpdateStaffRequest $parameters)
 * @method MBOSoap\CancelSingleClassResult CancelSingleClass(MBOSoap\CancelSingleClassRequest $parameters)
 * @method MBOSoap\CheckoutShoppingCartResult CheckoutShoppingCart(MBOSoap\CheckoutShoppingCartRequest $parameters)
 * @method MBOSoap\DeleteClientFormulaNoteResult DeleteClientFormulaNote(MBOSoap\DeleteClientFormulaNoteRequest $parameters)
 * @method MBOSoap\GetAcceptedCardTypeResult GetAcceptedCardType(MBOSoap\GetAcceptedCardTypeRequest $parameters)
 * @method MBOSoap\GetActivationCodeResult GetActivationCode(MBOSoap\GetActivationCodeRequest $parameters)
 * @method MBOSoap\GetActiveClientMembershipsResult GetActiveClientMemberships(MBOSoap\GetActiveClientMembershipsRequest $parameters)
 * @method MBOSoap\GetActiveSessionTimesResult GetActiveSessionTimes(MBOSoap\GetActiveSessionTimesRequest $parameters)
 * @method MBOSoap\GetAppointmentOptionsResult GetAppointmentOptions(MBOSoap\GetAppointmentOptionsRequest $parameters)
 * @method MBOSoap\GetBookableItemsResult GetBookableItems(MBOSoap\GetBookableItemsRequest $parameters)
 * @method MBOSoap\GetClassDescriptionsResult GetClassDescriptions(MBOSoap\GetClassDescriptionsRequest $parameters)
 * @method MBOSoap\GetClassesResult GetClasses(MBOSoap\GetClassesRequest $parameters)
 * @method MBOSoap\GetClassSchedulesResult GetClassSchedules(MBOSoap\GetClassSchedulesRequest $parameters)
 * @method MBOSoap\GetClassVisitsResult GetClassVisits(MBOSoap\GetClassVisitsRequest $parameters)
 * @method MBOSoap\GetClientAccountBalancesResult GetClientAccountBalances(MBOSoap\GetClientAccountBalancesRequest $parameters)
 * @method MBOSoap\GetClientContactLogsResult GetClientContactLogs(MBOSoap\GetClientContactLogsRequest $parameters)
 * @method MBOSoap\GetClientContractsResult GetClientContracts(MBOSoap\GetClientContractsRequest $parameters)
 * @method MBOSoap\GetClientFormulaNotesResult GetClientFormulaNotes(MBOSoap\GetClientFormulaNotesRequest $parameters)
 * @method MBOSoap\GetClientIndexesResult GetClientIndexes(MBOSoap\GetClientIndexesRequest $parameters)
 * @method MBOSoap\GetClientPurchasesResult GetClientPurchases(MBOSoap\GetClientPurchasesRequest $parameters)
 * @method MBOSoap\GetClientReferralTypesResult GetClientReferralTypes(MBOSoap\GetClientReferralTypesRequest $parameters)
 * @method MBOSoap\GetClientScheduleResult GetClientSchedule(MBOSoap\GetClientScheduleRequest $parameters)
 * @method MBOSoap\GetClientServicesResult GetClientServices(MBOSoap\GetClientServicesRequest $parameters)
 * @method MBOSoap\GetClientsResult GetClients(MBOSoap\GetClientsRequest $parameters)
 * @method MBOSoap\GetClientVisitsResult GetClientVisits(MBOSoap\GetClientVisitsRequest $parameters)
 * @method MBOSoap\GetContactLogTypesResult GetContactLogTypes(MBOSoap\GetContactLogTypesRequest $parameters)
 * @method MBOSoap\GetContractsResult GetContracts(MBOSoap\GetContractsRequest $parameters)
 * @method MBOSoap\GetCoursesResult GetCourses(MBOSoap\GetCoursesRequest $parameters)
 * @method MBOSoap\GetCrossRegionalClientAssociationsResult GetCrossRegionalClientAssociations(MBOSoap\GetCrossRegionalClientAssociationsRequest $parameters)
 * @method MBOSoap\GetCustomClientFieldsResult GetCustomClientFields(MBOSoap\GetCustomClientFieldsRequest $parameters)
 * @method MBOSoap\GetCustomPaymentMethodsResult GetCustomPaymentMethods(MBOSoap\GetCustomPaymentMethodsRequest $parameters)
 * @method MBOSoap\GetEnrollmentsResult GetEnrollments(MBOSoap\GetEnrollmentsRequest $parameters)
 * @method MBOSoap\GetGendersResult GetGenders(MBOSoap\GetGendersRequest $parameters)
 * @method MBOSoap\GetLocationsResult GetLocations(MBOSoap\GetLocationsRequest $parameters)
 * @method MBOSoap\GetMobileProvidersResult GetMobileProviders(MBOSoap\GetMobileProvidersRequest $parameters)
 * @method MBOSoap\GetPackagesResult GetPackages(MBOSoap\GetPackagesRequest $parameters)
 * @method MBOSoap\GetProductsResult GetProducts(MBOSoap\GetProductsRequest $parameters)
 * @method MBOSoap\GetProgramsResult GetPrograms(MBOSoap\GetProgramsRequest $parameters)
 * @method MBOSoap\GetProspectStagesResult GetProspectStages(MBOSoap\GetProspectStagesRequest $parameters)
 * @method MBOSoap\GetRelationshipsResult GetRelationships(MBOSoap\GetRelationshipsRequest $parameters)
 * @method MBOSoap\GetRequiredClientFieldsResult GetRequiredClientFields(MBOSoap\GetRequiredClientFieldsRequest $parameters)
 * @method MBOSoap\GetResourceScheduleResult GetResourceSchedule(MBOSoap\GetResourceScheduleRequest $parameters)
 * @method MBOSoap\GetResourcesResult GetResources(MBOSoap\GetResourcesRequest $parameters)
 * @method MBOSoap\GetSalesRepsResult GetSalesReps(MBOSoap\GetSalesRepsRequest $parameters)
 * @method MBOSoap\GetSalesResult GetSales(MBOSoap\GetSalesRequest $parameters)
 * @method MBOSoap\GetScheduleItemsResult GetScheduleItems(MBOSoap\GetScheduleItemsRequest $parameters)
 * @method MBOSoap\GetSemestersResult GetSemesters(MBOSoap\GetSemestersRequest $parameters)
 * @method MBOSoap\GetServicesResult GetServices(MBOSoap\GetServicesRequest $parameters)
 * @method MBOSoap\GetSessionTypesResult GetSessionTypes(MBOSoap\GetSessionTypesRequest $parameters)
 * @method MBOSoap\GetSitesResult GetSites(MBOSoap\GetSitesRequest $parameters)
 * @method MBOSoap\GetStaffAppointmentsResult GetStaffAppointments(MBOSoap\GetStaffAppointmentsRequest $parameters)
 * @method MBOSoap\GetStaffImgURLResult GetStaffImgURL(MBOSoap\GetStaffImgURLRequest $parameters)
 * @method MBOSoap\GetStaffPermissionsResult GetStaffPermissions(MBOSoap\GetStaffPermissionsRequest $parameters)
 * @method MBOSoap\GetStaffResult GetStaff(MBOSoap\GetStaffRequest $parameters)
 * @method MBOSoap\GetWaitlistEntriesResult GetWaitlistEntries(MBOSoap\GetWaitlistEntriesRequest $parameters)
 * @method MBOSoap\PurchaseContractsResult PurchaseContracts(MBOSoap\PurchaseContractsRequest $parameters)
 * @method MBOSoap\RedeemSpaFinderWellnessCardResult RedeemSpaFinderWellnessCard(MBOSoap\RedeemSpaFinderWellnessCardRequest $parameters)
 * @method MBOSoap\RemoveClientsFromClassesResult RemoveClientsFromClasses(MBOSoap\RemoveClientsFromClassesRequest $parameters)
 * @method MBOSoap\RemoveFromWaitlistResult RemoveFromWaitlist(MBOSoap\RemoveFromWaitlistRequest $parameters)
 * @method MBOSoap\ReserveResourceResult ReserveResource(MBOSoap\ReserveResourceRequest $parameters)
 * @method MBOSoap\ReturnSaleResult ReturnSale(MBOSoap\ReturnSaleRequest $parameters)
 * @method MBOSoap\ClientSendUserNewPasswordResult SendUserNewPassword(MBOSoap\SendUserNewPasswordRequest $parameters)
 * @method MBOSoap\SubstituteClassTeacherResult SubstituteClassTeacher(MBOSoap\SubstituteClassTeacherRequest $parameters)
 * @method MBOSoap\UpdateClientCrossRegionalResult UpdateClientCrossRegional(MBOSoap\UpdateClientCrossRegionalRequest $parameters)
 * @method MBOSoap\UpdateClientServicesResult UpdateClientServices(MBOSoap\UpdateClientServicesRequest $parameters)
 * @method MBOSoap\UpdateClientVisitsResult UpdateClientVisits(MBOSoap\UpdateClientVisitsRequest $parameters)
 * @method MBOSoap\UpdateProductsResult UpdateProducts(MBOSoap\UpdateProductsRequest $parameters)
 * @method MBOSoap\UpdateSaleDateResult UpdateSaleDate(MBOSoap\UpdateSaleDateRequest $parameters)
 * @method MBOSoap\UpdateServicesResult UpdateServices(MBOSoap\UpdateServicesRequest $parameters)
 * @method MBOSoap\UploadClientDocumentResult UploadClientDocument(MBOSoap\UploadClientDocumentRequest $parameters)
 * @method MBOSoap\UploadClientPhotoResult UploadClientPhoto(MBOSoap\UploadClientPhotoRequest $parameters)
 * @method MBOSoap\ValidateLoginResult ValidateLogin(MBOSoap\ValidateLoginRequest $parameters)
 * @method MBOSoap\ValidateLoginResult ValidateStaffLogin(MBOSoap\ValidateLoginRequest $parameters)
 */
class Mindbody
{
    use ValidatesApiResponses, ProvidesSoapClient, ProvidesMindbodyCredentials;

    private $connection;
    private $settings;

    /**
     * @param $connection
     * @param array $settings
     */
    public function __construct($connection, array $settings)
    {
        $this->connection = $connection;
        $this->settings = $settings;
    }

    /**
     * Fluent setter for the connection.
     *
     * @param null $connection
     * @return mixed
     */
    public function connection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * @param $method
     * @param array $parameters
     * @return mixed
     * @throws MindbodyErrorException
     */
    public function __call($method, array $parameters)
    {
        $this->validateSettings(
            $this->getSettings($this->connection)
        );

        $this->validateResponse(
            $response = $this->callMindbodyApi($method, $parameters[0] ?? [])
        );

        return $response;
    }

    /**
     * @param $methodName
     * @param array|\Nlocascio\Mindbody\MBOSoap\MBRequest $request
     * @return \Nlocascio\Mindbody\MBOSoap\MBResult
     * @throws MindbodyErrorException
     */
    private function callMindbodyApi($methodName, $request)
    {
        $client = $this->getSoapClientForMethod($methodName);

        $reflector = new \ReflectionObject($client);
        $requestWrapper = $reflector->getNamespaceName() . "\\" . ucfirst($methodName);


        if (is_array($request)) {
            $reqClass = $requestWrapper . "Request";
            $req = new $reqClass;
            foreach ($request as $key => $value) {
                $setter = "set" . $key;
                $req->$setter($value);
            }


            $request = $req;
        }

        $request->setSourceCredentials($this->getSourceCredentials())->setUserCredentials($this->getUserCredentials());
        $wrappedRequest = new $requestWrapper($request);

        $response = $client->$methodName($wrappedRequest);


        if (config('mindbody.debug')) {
            $dom = new DOMDocument('1.0', 'iso-8859-1');
            $dom->preserveWhiteSpace = false;

            $dom->loadXML($client->__getLastRequest());

            Log::debug("Called function " . $methodName . $dom->saveXML());

            $dom->loadXML($client->__getLastResponse());
            Log::debug("With Response:" . $dom->saveXML());
        }

        $resultname = 'get' . $methodName . 'Result';
        return $response->$resultname();
    }

    /**
     * @param $connection
     * @return mixed
     */
    private function getSettings($connection)
    {
        return $this->settings[$connection];
    }

    /**
     * @param $settings
     * @return bool
     */
    private function validateSettings($settings)
    {
        if (!isset(
            $settings['site_ids'],
            $settings['source_credentials']['username'],
            $settings['source_credentials']['password']
        )
        ) {
            throw new \InvalidArgumentException('Please set MINDBODY_SITEIDS, MINDBODY_SOURCENAME, MINDBODY_SOURCEPASSWORD environment variables.');
        }

        return true;
    }

}