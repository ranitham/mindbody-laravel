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
 * @method MBOSoap\AddArrivalResult AddArrival(MBOSoap\AddArrival $parameters)
 * @method MBOSoap\AddClientFormulaNoteResult AddClientFormulaNote(MBOSoap\AddClientFormulaNote $parameters)
 * @method MBOSoap\AddClientsToClassesResult AddClientsToClasses(MBOSoap\AddClientsToClasses $parameters)
 * @method MBOSoap\AddClientsToEnrollmentsResult AddClientsToEnrollments(MBOSoap\AddClientsToEnrollments $parameters)
 * @method MBOSoap\AddClientsToClassesResult AddClientToClass(MBOSoap\AddClientToClass $parameters)
 * @method MBOSoap\AddOrUpdateAppointmentsResult AddOrUpdateAppointments(MBOSoap\AddOrUpdateAppointments $parameters)
 * @method MBOSoap\AddOrUpdateAvailabilitiesResult AddOrUpdateAvailabilities(MBOSoap\AddOrUpdateAvailabilities $parameters)
 * @method MBOSoap\AddOrUpdateClientsResult AddOrUpdateClients(MBOSoap\AddOrUpdateClients $parameters)
 * @method MBOSoap\AddOrUpdateContactLogsResult AddOrUpdateContactLogs(MBOSoap\AddOrUpdateContactLogs $parameters)
 * @method MBOSoap\AddOrUpdateStaffResult AddOrUpdateStaff(MBOSoap\AddOrUpdateStaff $parameters)
 * @method MBOSoap\CancelSingleClassResult CancelSingleClass(MBOSoap\CancelSingleClass $parameters)
 * @method MBOSoap\CheckoutShoppingCartResult CheckoutShoppingCart(MBOSoap\CheckoutShoppingCart $parameters)
 * @method MBOSoap\DeleteClientFormulaNoteResult DeleteClientFormulaNote(MBOSoap\DeleteClientFormulaNote $parameters)
 * @method MBOSoap\GetAcceptedCardTypeResult GetAcceptedCardType(MBOSoap\GetAcceptedCardType $parameters)
 * @method MBOSoap\GetActivationCodeResult GetActivationCode(MBOSoap\GetActivationCode $parameters)
 * @method MBOSoap\GetActiveClientMembershipsResult GetActiveClientMemberships(MBOSoap\GetActiveClientMemberships $parameters)
 * @method MBOSoap\GetActiveSessionTimesResult GetActiveSessionTimes(MBOSoap\GetActiveSessionTimes $parameters)
 * @method MBOSoap\GetAppointmentOptionsResult GetAppointmentOptions(MBOSoap\GetAppointmentOptions $parameters)
 * @method MBOSoap\GetBookableItemsResult GetBookableItems(MBOSoap\GetBookableItems $parameters)
 * @method MBOSoap\GetClassDescriptionsResult GetClassDescriptions(MBOSoap\GetClassDescriptions $parameters)
 * @method MBOSoap\GetClassesResult GetClasses(MBOSoap\GetClasses $parameters)
 * @method MBOSoap\GetClassSchedulesResult GetClassSchedules(MBOSoap\GetClassSchedules $parameters)
 * @method MBOSoap\GetClassVisitsResult GetClassVisits(MBOSoap\GetClassVisits $parameters)
 * @method MBOSoap\GetClientAccountBalancesResult GetClientAccountBalances(MBOSoap\GetClientAccountBalances $parameters)
 * @method MBOSoap\GetClientContactLogsResult GetClientContactLogs(MBOSoap\GetClientContactLogs $parameters)
 * @method MBOSoap\GetClientContractsResult GetClientContracts(MBOSoap\GetClientContracts $parameters)
 * @method MBOSoap\GetClientFormulaNotesResult GetClientFormulaNotes(MBOSoap\GetClientFormulaNotes $parameters)
 * @method MBOSoap\GetClientIndexesResult GetClientIndexes(MBOSoap\GetClientIndexes $parameters)
 * @method MBOSoap\GetClientPurchasesResult GetClientPurchases(MBOSoap\GetClientPurchases $parameters)
 * @method MBOSoap\GetClientReferralTypesResult GetClientReferralTypes(MBOSoap\GetClientReferralTypes $parameters)
 * @method MBOSoap\GetClientScheduleResult GetClientSchedule(MBOSoap\GetClientSchedule $parameters)
 * @method MBOSoap\GetClientServicesResult GetClientServices(MBOSoap\GetClientServices $parameters)
 * @method MBOSoap\GetClientsResult GetClients(MBOSoap\GetClients $parameters)
 * @method MBOSoap\GetClientVisitsResult GetClientVisits(MBOSoap\GetClientVisits $parameters)
 * @method MBOSoap\GetContactLogTypesResult GetContactLogTypes(MBOSoap\GetContactLogTypes $parameters)
 * @method MBOSoap\GetContractsResult GetContracts(MBOSoap\GetContracts $parameters)
 * @method MBOSoap\GetCoursesResult GetCourses(MBOSoap\GetCourses $parameters)
 * @method MBOSoap\GetCrossRegionalClientAssociationsResult GetCrossRegionalClientAssociations(MBOSoap\GetCrossRegionalClientAssociations $parameters)
 * @method MBOSoap\GetCustomClientFieldsResult GetCustomClientFields(MBOSoap\GetCustomClientFields $parameters)
 * @method MBOSoap\GetCustomPaymentMethodsResult GetCustomPaymentMethods(MBOSoap\GetCustomPaymentMethods $parameters)
 * @method MBOSoap\GetEnrollmentsResult GetEnrollments(MBOSoap\GetEnrollments $parameters)
 * @method MBOSoap\GetGendersResult GetGenders(MBOSoap\GetGenders $parameters)
 * @method MBOSoap\GetLocationsResult GetLocations(MBOSoap\GetLocations $parameters)
 * @method MBOSoap\GetMobileProvidersResult GetMobileProviders(MBOSoap\GetMobileProviders $parameters)
 * @method MBOSoap\GetPackagesResult GetPackages(MBOSoap\GetPackages $parameters)
 * @method MBOSoap\GetProductsResult GetProducts(MBOSoap\GetProducts $parameters)
 * @method MBOSoap\GetProgramsResult GetPrograms(MBOSoap\GetPrograms $parameters)
 * @method MBOSoap\GetProspectStagesResult GetProspectStages(MBOSoap\GetProspectStages $parameters)
 * @method MBOSoap\GetRelationshipsResult GetRelationships(MBOSoap\GetRelationships $parameters)
 * @method MBOSoap\GetRequiredClientFieldsResult GetRequiredClientFields(MBOSoap\GetRequiredClientFields $parameters)
 * @method MBOSoap\GetResourceScheduleResult GetResourceSchedule(MBOSoap\GetResourceSchedule $parameters)
 * @method MBOSoap\GetResourcesResult GetResources(MBOSoap\GetResources $parameters)
 * @method MBOSoap\GetSalesRepsResult GetSalesReps(MBOSoap\GetSalesReps $parameters)
 * @method MBOSoap\GetSalesResult GetSales(MBOSoap\GetSales $parameters)
 * @method MBOSoap\GetScheduleItemsResult GetScheduleItems(MBOSoap\GetScheduleItems $parameters)
 * @method MBOSoap\GetSemestersResult GetSemesters(MBOSoap\GetSemesters $parameters)
 * @method MBOSoap\GetServicesResult GetServices(MBOSoap\GetServices $parameters)
 * @method MBOSoap\GetSessionTypesResult GetSessionTypes(MBOSoap\GetSessionTypes $parameters)
 * @method MBOSoap\GetSitesResult GetSites(MBOSoap\GetSites $parameters)
 * @method MBOSoap\GetStaffAppointmentsResult GetStaffAppointments(MBOSoap\GetStaffAppointments $parameters)
 * @method MBOSoap\GetStaffImgURLResult GetStaffImgURL(MBOSoap\GetStaffImgURL $parameters)
 * @method MBOSoap\GetStaffPermissionsResult GetStaffPermissions(MBOSoap\GetStaffPermissions $parameters)
 * @method MBOSoap\GetStaffResult GetStaff(MBOSoap\GetStaff $parameters)
 * @method MBOSoap\GetWaitlistEntriesResult GetWaitlistEntries(MBOSoap\GetWaitlistEntries $parameters)
 * @method MBOSoap\PurchaseContractsResult PurchaseContracts(MBOSoap\PurchaseContracts $parameters)
 * @method MBOSoap\RedeemSpaFinderWellnessCardResult RedeemSpaFinderWellnessCard(MBOSoap\RedeemSpaFinderWellnessCard $parameters)
 * @method MBOSoap\RemoveClientsFromClassesResult RemoveClientsFromClasses(MBOSoap\RemoveClientsFromClasses $parameters)
 * @method MBOSoap\RemoveFromWaitlistResult RemoveFromWaitlist(MBOSoap\RemoveFromWaitlist $parameters)
 * @method MBOSoap\ReserveResourceResult ReserveResource(MBOSoap\ReserveResource $parameters)
 * @method MBOSoap\ReturnSaleResult ReturnSale(MBOSoap\ReturnSale $parameters)
 * @method MBOSoap\ClientSendUserNewPasswordResult SendUserNewPassword(MBOSoap\SendUserNewPassword $parameters)
 * @method MBOSoap\SubstituteClassTeacherResult SubstituteClassTeacher(MBOSoap\SubstituteClassTeacher $parameters)
 * @method MBOSoap\SubstituteClassTeacherResult SubtituteClassTeacher(MBOSoap\SubtituteClassTeacher $parameters)
 * @method MBOSoap\UpdateClientCrossRegionalResult UpdateClientCrossRegional(MBOSoap\UpdateClientCrossRegional $parameters)
 * @method MBOSoap\UpdateClientServicesResult UpdateClientServices(MBOSoap\UpdateClientServices $parameters)
 * @method MBOSoap\UpdateClientVisitsResult UpdateClientVisits(MBOSoap\UpdateClientVisits $parameters)
 * @method MBOSoap\UpdateProductsResult UpdateProducts(MBOSoap\UpdateProducts $parameters)
 * @method MBOSoap\UpdateSaleDateResult UpdateSaleDate(MBOSoap\UpdateSaleDate $parameters)
 * @method MBOSoap\UpdateServicesResult UpdateServices(MBOSoap\UpdateServices $parameters)
 * @method MBOSoap\UploadClientDocumentResult UploadClientDocument(MBOSoap\UploadClientDocument $parameters)
 * @method MBOSoap\UploadClientPhotoResult UploadClientPhoto(MBOSoap\UploadClientPhoto $parameters)
 * @method MBOSoap\ValidateLoginResult ValidateLogin(MBOSoap\ValidateLogin $parameters)
 * @method MBOSoap\ValidateLoginResult ValidateStaffLogin(MBOSoap\ValidateStaffLogin $parameters)
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
        $requestWrapper = $reflector->getNamespaceName() . "\\" . $methodName;


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


        if (config('app.debug')) {
            $dom = new DOMDocument('1.0', 'iso-8859-1');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;

            $dom->loadXML($client->__getLastRequest());

            Log::debug(Log::debug("Called function " . $methodName . $dom->saveXML()));

            $dom->loadXML($client->__getLastResponse());
            Log::debug(Log::debug("With Response:" . $dom->saveXML()));
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