<?php

namespace Nlocascio\Mindbody;

use Illuminate\Support\Facades\Facade;

/**
 * @method static MBOSoap\AddArrivalResult AddArrival(MBOSoap\AddArrivalRequest $parameters)
 * @method static MBOSoap\AddClientFormulaNoteResult AddClientFormulaNote(MBOSoap\AddClientFormulaNoteRequest $parameters)
 * @method static MBOSoap\AddClientsToClassesResult AddClientsToClasses(MBOSoap\AddClientsToClassesRequest $parameters)
 * @method static MBOSoap\AddClientsToEnrollmentsResult AddClientsToEnrollments(MBOSoap\AddClientsToEnrollmentsRequest $parameters)
 * @method static MBOSoap\AddClientsToClassesResult AddClientToClass(MBOSoap\AddClientToClassRequest $parameters)
 * @method static MBOSoap\AddOrUpdateAppointmentsResult AddOrUpdateAppointments(MBOSoap\AddOrUpdateAppointmentsRequest $parameters)
 * @method static MBOSoap\AddOrUpdateAvailabilitiesResult AddOrUpdateAvailabilities(MBOSoap\AddOrUpdateAvailabilitiesRequest $parameters)
 * @method static MBOSoap\AddOrUpdateClientsResult AddOrUpdateClients(MBOSoap\AddOrUpdateClientsRequest $parameters)
 * @method static MBOSoap\AddOrUpdateContactLogsResult AddOrUpdateContactLogs(MBOSoap\AddOrUpdateContactLogsRequest $parameters)
 * @method static MBOSoap\AddOrUpdateStaffResult AddOrUpdateStaff(MBOSoap\AddOrUpdateStaffRequest $parameters)
 * @method static MBOSoap\CancelSingleClassResult CancelSingleClass(MBOSoap\CancelSingleClassRequest $parameters)
 * @method static MBOSoap\CheckoutShoppingCartResult CheckoutShoppingCart(MBOSoap\CheckoutShoppingCartRequest $parameters)
 * @method static MBOSoap\DeleteClientFormulaNoteResult DeleteClientFormulaNote(MBOSoap\DeleteClientFormulaNoteRequest $parameters)
 * @method static MBOSoap\GetAcceptedCardTypeResult GetAcceptedCardType(MBOSoap\GetAcceptedCardTypeRequest $parameters)
 * @method static MBOSoap\GetActivationCodeResult GetActivationCode(MBOSoap\GetActivationCodeRequest $parameters)
 * @method static MBOSoap\GetActiveClientMembershipsResult GetActiveClientMemberships(MBOSoap\GetActiveClientMembershipsRequest $parameters)
 * @method static MBOSoap\GetActiveSessionTimesResult GetActiveSessionTimes(MBOSoap\GetActiveSessionTimesRequest $parameters)
 * @method static MBOSoap\GetAppointmentOptionsResult GetAppointmentOptions(MBOSoap\GetAppointmentOptionsRequest $parameters)
 * @method static MBOSoap\GetBookableItemsResult GetBookableItems(MBOSoap\GetBookableItemsRequest $parameters)
 * @method static MBOSoap\GetClassDescriptionsResult GetClassDescriptions(MBOSoap\GetClassDescriptionsRequest $parameters)
 * @method static MBOSoap\GetClassesResult GetClasses(MBOSoap\GetClassesRequest $parameters)
 * @method static MBOSoap\GetClassSchedulesResult GetClassSchedules(MBOSoap\GetClassSchedulesRequest $parameters)
 * @method static MBOSoap\GetClassVisitsResult GetClassVisits(MBOSoap\GetClassVisitsRequest $parameters)
 * @method static MBOSoap\GetClientAccountBalancesResult GetClientAccountBalances(MBOSoap\GetClientAccountBalancesRequest $parameters)
 * @method static MBOSoap\GetClientContactLogsResult GetClientContactLogs(MBOSoap\GetClientContactLogsRequest $parameters)
 * @method static MBOSoap\GetClientContractsResult GetClientContracts(MBOSoap\GetClientContractsRequest $parameters)
 * @method static MBOSoap\GetClientFormulaNotesResult GetClientFormulaNotes(MBOSoap\GetClientFormulaNotesRequest $parameters)
 * @method static MBOSoap\GetClientIndexesResult GetClientIndexes(MBOSoap\GetClientIndexesRequest $parameters)
 * @method static MBOSoap\GetClientPurchasesResult GetClientPurchases(MBOSoap\GetClientPurchasesRequest $parameters)
 * @method static MBOSoap\GetClientReferralTypesResult GetClientReferralTypes(MBOSoap\GetClientReferralTypesRequest $parameters)
 * @method static MBOSoap\GetClientScheduleResult GetClientSchedule(MBOSoap\GetClientScheduleRequest $parameters)
 * @method static MBOSoap\GetClientServicesResult GetClientServices(MBOSoap\GetClientServicesRequest $parameters)
 * @method static MBOSoap\GetClientsResult GetClients(MBOSoap\GetClientsRequest $parameters)
 * @method static MBOSoap\GetClientVisitsResult GetClientVisits(MBOSoap\GetClientVisitsRequest $parameters)
 * @method static MBOSoap\GetContactLogTypesResult GetContactLogTypes(MBOSoap\GetContactLogTypesRequest $parameters)
 * @method static MBOSoap\GetContractsResult GetContracts(MBOSoap\GetContractsRequest $parameters)
 * @method static MBOSoap\GetCoursesResult GetCourses(MBOSoap\GetCoursesRequest $parameters)
 * @method static MBOSoap\GetCrossRegionalClientAssociationsResult GetCrossRegionalClientAssociations(MBOSoap\GetCrossRegionalClientAssociationsRequest $parameters)
 * @method static MBOSoap\GetCustomClientFieldsResult GetCustomClientFields(MBOSoap\GetCustomClientFieldsRequest $parameters)
 * @method static MBOSoap\GetCustomPaymentMethodsResult GetCustomPaymentMethods(MBOSoap\GetCustomPaymentMethodsRequest $parameters)
 * @method static MBOSoap\GetEnrollmentsResult GetEnrollments(MBOSoap\GetEnrollmentsRequest $parameters)
 * @method static MBOSoap\GetGendersResult GetGenders(MBOSoap\GetGendersRequest $parameters)
 * @method static MBOSoap\GetLocationsResult GetLocations(MBOSoap\GetLocationsRequest $parameters)
 * @method static MBOSoap\GetMobileProvidersResult GetMobileProviders(MBOSoap\GetMobileProvidersRequest $parameters)
 * @method static MBOSoap\GetPackagesResult GetPackages(MBOSoap\GetPackagesRequest $parameters)
 * @method static MBOSoap\GetProductsResult GetProducts(MBOSoap\GetProductsRequest $parameters)
 * @method static MBOSoap\GetProgramsResult GetPrograms(MBOSoap\GetProgramsRequest $parameters)
 * @method static MBOSoap\GetProspectStagesResult GetProspectStages(MBOSoap\GetProspectStagesRequest $parameters)
 * @method static MBOSoap\GetRelationshipsResult GetRelationships(MBOSoap\GetRelationshipsRequest $parameters)
 * @method static MBOSoap\GetRequiredClientFieldsResult GetRequiredClientFields(MBOSoap\GetRequiredClientFieldsRequest $parameters)
 * @method static MBOSoap\GetResourceScheduleResult GetResourceSchedule(MBOSoap\GetResourceScheduleRequest $parameters)
 * @method static MBOSoap\GetResourcesResult GetResources(MBOSoap\GetResourcesRequest $parameters)
 * @method static MBOSoap\GetSalesRepsResult GetSalesReps(MBOSoap\GetSalesRepsRequest $parameters)
 * @method static MBOSoap\GetSalesResult GetSales(MBOSoap\GetSalesRequest $parameters)
 * @method static MBOSoap\GetScheduleItemsResult GetScheduleItems(MBOSoap\GetScheduleItemsRequest $parameters)
 * @method static MBOSoap\GetSemestersResult GetSemesters(MBOSoap\GetSemestersRequest $parameters)
 * @method static MBOSoap\GetServicesResult GetServices(MBOSoap\GetServicesRequest $parameters)
 * @method static MBOSoap\GetSessionTypesResult GetSessionTypes(MBOSoap\GetSessionTypesRequest $parameters)
 * @method static MBOSoap\GetSitesResult GetSites(MBOSoap\GetSitesRequest $parameters)
 * @method static MBOSoap\GetStaffAppointmentsResult GetStaffAppointments(MBOSoap\GetStaffAppointmentsRequest $parameters)
 * @method static MBOSoap\GetStaffImgURLResult GetStaffImgURL(MBOSoap\GetStaffImgURLRequest $parameters)
 * @method static MBOSoap\GetStaffPermissionsResult GetStaffPermissions(MBOSoap\GetStaffPermissionsRequest $parameters)
 * @method static MBOSoap\GetStaffResult GetStaff(MBOSoap\GetStaffRequest $parameters)
 * @method static MBOSoap\GetWaitlistEntriesResult GetWaitlistEntries(MBOSoap\GetWaitlistEntriesRequest $parameters)
 * @method static MBOSoap\PurchaseContractsResult PurchaseContracts(MBOSoap\PurchaseContractsRequest $parameters)
 * @method static MBOSoap\RedeemSpaFinderWellnessCardResult RedeemSpaFinderWellnessCard(MBOSoap\RedeemSpaFinderWellnessCardRequest $parameters)
 * @method static MBOSoap\RemoveClientsFromClassesResult RemoveClientsFromClasses(MBOSoap\RemoveClientsFromClassesRequest $parameters)
 * @method static MBOSoap\RemoveFromWaitlistResult RemoveFromWaitlist(MBOSoap\RemoveFromWaitlistRequest $parameters)
 * @method static MBOSoap\ReserveResourceResult ReserveResource(MBOSoap\ReserveResourceRequest $parameters)
 * @method static MBOSoap\ReturnSaleResult ReturnSale(MBOSoap\ReturnSaleRequest $parameters)
 * @method static MBOSoap\ClientSendUserNewPasswordResult SendUserNewPassword(MBOSoap\SendUserNewPasswordRequest $parameters)
 * @method static MBOSoap\SubstituteClassTeacherResult SubstituteClassTeacher(MBOSoap\SubstituteClassTeacherRequest $parameters)
 * @method static MBOSoap\UpdateClientCrossRegionalResult UpdateClientCrossRegional(MBOSoap\UpdateClientCrossRegionalRequest $parameters)
 * @method static MBOSoap\UpdateClientServicesResult UpdateClientServices(MBOSoap\UpdateClientServicesRequest $parameters)
 * @method static MBOSoap\UpdateClientVisitsResult UpdateClientVisits(MBOSoap\UpdateClientVisitsRequest $parameters)
 * @method static MBOSoap\UpdateProductsResult UpdateProducts(MBOSoap\UpdateProductsRequest $parameters)
 * @method static MBOSoap\UpdateSaleDateResult UpdateSaleDate(MBOSoap\UpdateSaleDateRequest $parameters)
 * @method static MBOSoap\UpdateServicesResult UpdateServices(MBOSoap\UpdateServicesRequest $parameters)
 * @method static MBOSoap\UploadClientDocumentResult UploadClientDocument(MBOSoap\UploadClientDocumentRequest $parameters)
 * @method static MBOSoap\UploadClientPhotoResult UploadClientPhoto(MBOSoap\UploadClientPhotoRequest $parameters)
 * @method static MBOSoap\ValidateLoginResult ValidateLogin(MBOSoap\ValidateLoginRequest $parameters)
 * @method static MBOSoap\ValidateLoginResult ValidateStaffLogin(MBOSoap\ValidateLoginRequest $parameters)
 */
class MBO extends Facade
{
    public static function getFacadeAccessor()
    {
        return Mindbody::class;
    }


}