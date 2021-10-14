<?php

namespace Nlocascio\Mindbody;

use Nlocascio\Mindbody\Exceptions\MindbodyErrorException;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client as GuzzleHttpClient;
use Nlocascio\Mindbody\Api\ApiInterface;
use Nlocascio\Mindbody\Traits\ProvidesMethodToEndpointMap;
use Nlocascio\Mindbody\Traits\ProvidesMindbodyAuthorisationToken;

use Nlocascio\Mindbody\Api\AppointmentApi;
use Nlocascio\Mindbody\Api\ClassApi;
use Nlocascio\Mindbody\Api\ClientApi;
use Nlocascio\Mindbody\Api\EnrollmentApi;
use Nlocascio\Mindbody\Api\LiveStreamApi;
use Nlocascio\Mindbody\Api\PayrollApi;
use Nlocascio\Mindbody\Api\PricingOptionApi;
use Nlocascio\Mindbody\Api\SaleApi;
use Nlocascio\Mindbody\Api\SiteApi;
use Nlocascio\Mindbody\Api\StaffApi;
use Nlocascio\Mindbody\Api\UserTokenApi;

/**
 * Class Mindbody
 * @package Nlocascio\Mindbody
 * @method \Nlocascio\Mindbody\Model\AddAppointmentResponse appointmentAddAppointment(\Nlocascio\Mindbody\Model\AddAppointmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddAppointmentResponse AddAppointment(\Nlocascio\Mindbody\Model\AddAppointmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddAppointmentAddOnResponse appointmentAddAppointmentAddOn(\Nlocascio\Mindbody\Model\AddAppointmentAddOnRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddAppointmentAddOnResponse AddAppointmentAddOn(\Nlocascio\Mindbody\Model\AddAppointmentAddOnRequest $Request);
 * @method void appointmentDeleteAppointmentAddOn(int $Id);
 * @method void DeleteAppointmentAddOn(int $Id);
 * @method \Nlocascio\Mindbody\Model\GetActiveSessionTimesResponse appointmentGetActiveSessionTimes(\DateTime $RequestEndTime, int $RequestLimit, int $RequestOffset, string $RequestScheduleType, int[] $RequestSessionTypeIds, \DateTime $RequestStartTime);
 * @method \Nlocascio\Mindbody\Model\GetActiveSessionTimesResponse GetActiveSessionTimes(\DateTime $RequestEndTime, int $RequestLimit, int $RequestOffset, string $RequestScheduleType, int[] $RequestSessionTypeIds, \DateTime $RequestStartTime);
 * @method \Nlocascio\Mindbody\Model\GetAddOnsResponse appointmentGetAddOns(int $RequestLimit, int $RequestOffset, int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetAddOnsResponse GetAddOns(int $RequestLimit, int $RequestOffset, int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetAppointmentOptionsResponse appointmentGetAppointmentOptions();
 * @method \Nlocascio\Mindbody\Model\GetAppointmentOptionsResponse GetAppointmentOptions();
 * @method \Nlocascio\Mindbody\Model\GetAvailableDatesResponse appointmentGetAvailableDates(int $RequestSessionTypeId, \DateTime $RequestEndDate, int $RequestLocationId, int $RequestStaffId, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetAvailableDatesResponse GetAvailableDates(int $RequestSessionTypeId, \DateTime $RequestEndDate, int $RequestLocationId, int $RequestStaffId, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetBookableItemsResponse appointmentGetBookableItems(int[] $RequestSessionTypeIds, int $RequestAppointmentId, \DateTime $RequestEndDate, bool $RequestIgnoreDefaultSessionLength, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetBookableItemsResponse GetBookableItems(int[] $RequestSessionTypeIds, int $RequestAppointmentId, \DateTime $RequestEndDate, bool $RequestIgnoreDefaultSessionLength, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetScheduleItemsResponse appointmentGetScheduleItems(\DateTime $RequestEndDate, bool $RequestIgnorePrepFinishTimes, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetScheduleItemsResponse GetScheduleItems(\DateTime $RequestEndDate, bool $RequestIgnorePrepFinishTimes, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetStaffAppointmentsResponse appointmentGetStaffAppointments(int[] $RequestAppointmentIds, string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetStaffAppointmentsResponse GetStaffAppointments(int[] $RequestAppointmentIds, string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\UpdateAppointmentResponse appointmentUpdateAppointment(\Nlocascio\Mindbody\Model\UpdateAppointmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateAppointmentResponse UpdateAppointment(\Nlocascio\Mindbody\Model\UpdateAppointmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientToClassResponse classAddClientToClass(\Nlocascio\Mindbody\Model\AddClientToClassRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientToClassResponse AddClientToClass(\Nlocascio\Mindbody\Model\AddClientToClassRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetClassDescriptionsResponse classGetClassDescriptions(int $RequestClassDescriptionId, \DateTime $RequestEndClassDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestProgramIds, int $RequestStaffId, \DateTime $RequestStartClassDateTime);
 * @method \Nlocascio\Mindbody\Model\GetClassDescriptionsResponse GetClassDescriptions(int $RequestClassDescriptionId, \DateTime $RequestEndClassDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestProgramIds, int $RequestStaffId, \DateTime $RequestStartClassDateTime);
 * @method \Nlocascio\Mindbody\Model\GetClassSchedulesResponse classGetClassSchedules(int[] $RequestClassScheduleIds, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClassSchedulesResponse GetClassSchedules(int[] $RequestClassScheduleIds, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClassVisitsResponse classGetClassVisits(int $RequestClassID, \DateTime $RequestLastModifiedDate);
 * @method \Nlocascio\Mindbody\Model\GetClassVisitsResponse GetClassVisits(int $RequestClassID, \DateTime $RequestLastModifiedDate);
 * @method \Nlocascio\Mindbody\Model\GetClassesResponse classGetClasses(int[] $RequestClassDescriptionIds, int[] $RequestClassIds, string $RequestClientId, \DateTime $RequestEndDateTime, bool $RequestHideCanceledClasses, \DateTime $RequestLastModifiedDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, bool $RequestSchedulingWindow, int[] $RequestSemesterIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetClassesResponse GetClasses(int[] $RequestClassDescriptionIds, int[] $RequestClassIds, string $RequestClientId, \DateTime $RequestEndDateTime, bool $RequestHideCanceledClasses, \DateTime $RequestLastModifiedDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, bool $RequestSchedulingWindow, int[] $RequestSemesterIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetWaitlistEntriesResponse classGetWaitlistEntries(int[] $RequestClassIds, int[] $RequestClassScheduleIds, string[] $RequestClientIds, bool $RequestHidePastEntries, int $RequestLimit, int $RequestOffset, int[] $RequestWaitlistEntryIds);
 * @method \Nlocascio\Mindbody\Model\GetWaitlistEntriesResponse GetWaitlistEntries(int[] $RequestClassIds, int[] $RequestClassScheduleIds, string[] $RequestClientIds, bool $RequestHidePastEntries, int $RequestLimit, int $RequestOffset, int[] $RequestWaitlistEntryIds);
 * @method \Nlocascio\Mindbody\Model\RemoveClientFromClassResponse classRemoveClientFromClass(\Nlocascio\Mindbody\Model\RemoveClientFromClassRequest $Request);
 * @method \Nlocascio\Mindbody\Model\RemoveClientFromClassResponse RemoveClientFromClass(\Nlocascio\Mindbody\Model\RemoveClientFromClassRequest $Request);
 * @method \Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse classRemoveFromWaitlist(int[] $RequestWaitlistEntryIds);
 * @method \Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse RemoveFromWaitlist(int[] $RequestWaitlistEntryIds);
 * @method \Nlocascio\Mindbody\Model\SubstituteClassTeacherResponse classSubstituteClassTeacher(\Nlocascio\Mindbody\Model\SubstituteClassTeacherRequest $Request);
 * @method \Nlocascio\Mindbody\Model\SubstituteClassTeacherResponse SubstituteClassTeacher(\Nlocascio\Mindbody\Model\SubstituteClassTeacherRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddArrivalResponse clientAddArrival(\Nlocascio\Mindbody\Model\AddArrivalRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddArrivalResponse AddArrival(\Nlocascio\Mindbody\Model\AddArrivalRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientResponse clientAddClient(\Nlocascio\Mindbody\Model\AddClientRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientResponse AddClient(\Nlocascio\Mindbody\Model\AddClientRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientDirectDebitInfoResponse clientAddClientDirectDebitInfo(\Nlocascio\Mindbody\Model\AddClientDirectDebitInfoRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddClientDirectDebitInfoResponse AddClientDirectDebitInfo(\Nlocascio\Mindbody\Model\AddClientDirectDebitInfoRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ContactLog clientAddContactLog(\Nlocascio\Mindbody\Model\AddContactLogRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ContactLog AddContactLog(\Nlocascio\Mindbody\Model\AddContactLogRequest $Request);
 * @method \Nlocascio\Mindbody\Model\FormulaNoteResponse clientAddFormulaNote(\Nlocascio\Mindbody\Model\AddFormulaNoteRequest $Request);
 * @method \Nlocascio\Mindbody\Model\FormulaNoteResponse AddFormulaNote(\Nlocascio\Mindbody\Model\AddFormulaNoteRequest $Request);
 * @method void clientDeleteClientFormulaNote(string $RequestClientId, int $RequestFormulaNoteId, int $RequestLimit, int $RequestOffset);
 * @method void DeleteClientFormulaNote(string $RequestClientId, int $RequestFormulaNoteId, int $RequestLimit, int $RequestOffset);
 * @method object clientDeleteContactLog(string $RequestClientId, int $RequestContactLogId, bool $RequestTest);
 * @method object DeleteContactLog(string $RequestClientId, int $RequestContactLogId, bool $RequestTest);
 * @method object clientDeleteDirectDebitInfo(string $ClientId);
 * @method object DeleteDirectDebitInfo(string $ClientId);
 * @method \Nlocascio\Mindbody\Model\GetActiveClientMembershipsResponse clientGetActiveClientMemberships(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestLocationId, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetActiveClientMembershipsResponse GetActiveClientMemberships(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestLocationId, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetActiveClientsMembershipsResponse clientGetActiveClientsMemberships(string[] $RequestClientIds, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestLocationId, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetActiveClientsMembershipsResponse GetActiveClientsMemberships(string[] $RequestClientIds, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestLocationId, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientAccountBalancesResponse clientGetClientAccountBalances(string[] $RequestClientIds, \DateTime $RequestBalanceDate, int $RequestClassId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientAccountBalancesResponse GetClientAccountBalances(string[] $RequestClientIds, \DateTime $RequestBalanceDate, int $RequestClassId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientCompleteInfoResponse clientGetClientCompleteInfo(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, string[] $RequestRequiredClientData, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientCompleteInfoResponse GetClientCompleteInfo(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, string[] $RequestRequiredClientData, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientContractsResponse clientGetClientContracts(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientContractsResponse GetClientContracts(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientDuplicatesResponse clientGetClientDuplicates(string $RequestEmail, string $RequestFirstName, string $RequestLastName, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientDuplicatesResponse GetClientDuplicates(string $RequestEmail, string $RequestFirstName, string $RequestLastName, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientFormulaNotesResponse clientGetClientFormulaNotes(int $RequestAppointmentId, string $RequestClientId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientFormulaNotesResponse GetClientFormulaNotes(int $RequestAppointmentId, string $RequestClientId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetClientIndexesResponse clientGetClientIndexes(bool $RequestRequiredOnly);
 * @method \Nlocascio\Mindbody\Model\GetClientIndexesResponse GetClientIndexes(bool $RequestRequiredOnly);
 * @method \Nlocascio\Mindbody\Model\GetClientPurchasesResponse clientGetClientPurchases(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, int $RequestSaleId, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientPurchasesResponse GetClientPurchases(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, int $RequestSaleId, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientReferralTypesResponse clientGetClientReferralTypes(bool $RequestIncludeInactive);
 * @method \Nlocascio\Mindbody\Model\GetClientReferralTypesResponse GetClientReferralTypes(bool $RequestIncludeInactive);
 * @method \Nlocascio\Mindbody\Model\GetClientRewardsResponse clientGetClientRewards(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientRewardsResponse GetClientRewards(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetClientServicesResponse clientGetClientServices(string $RequestClientId, int $RequestClassId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, bool $RequestIgnoreCrossRegionalSiteLimit, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int $RequestSessionTypeId, bool $RequestShowActiveOnly, \DateTime $RequestStartDate, int $RequestVisitCount);
 * @method \Nlocascio\Mindbody\Model\GetClientServicesResponse GetClientServices(string $RequestClientId, int $RequestClassId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, bool $RequestIgnoreCrossRegionalSiteLimit, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int $RequestSessionTypeId, bool $RequestShowActiveOnly, \DateTime $RequestStartDate, int $RequestVisitCount);
 * @method \Nlocascio\Mindbody\Model\GetClientVisitsResponse clientGetClientVisits(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, \DateTime $RequestStartDate, bool $RequestUnpaidsOnly);
 * @method \Nlocascio\Mindbody\Model\GetClientVisitsResponse GetClientVisits(string $RequestClientId, int $RequestClientAssociatedSitesOffset, bool $RequestCrossRegionalLookup, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, \DateTime $RequestStartDate, bool $RequestUnpaidsOnly);
 * @method \Nlocascio\Mindbody\Model\GetClientsResponse clientGetClients(string[] $RequestClientIDs, bool $RequestIncludeInactive, bool $RequestIsProspect, \DateTime $RequestLastModifiedDate, int $RequestLimit, int $RequestOffset, string $RequestSearchText, int[] $RequestUniqueIds);
 * @method \Nlocascio\Mindbody\Model\GetClientsResponse GetClients(string[] $RequestClientIDs, bool $RequestIncludeInactive, bool $RequestIsProspect, \DateTime $RequestLastModifiedDate, int $RequestLimit, int $RequestOffset, string $RequestSearchText, int[] $RequestUniqueIds);
 * @method \Nlocascio\Mindbody\Model\GetContactLogTypesResponse clientGetContactLogTypes(int $RequestContactLogTypeId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetContactLogTypesResponse GetContactLogTypes(int $RequestContactLogTypeId, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetContactLogsResponse clientGetContactLogs(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, bool $RequestShowSystemGenerated, int[] $RequestStaffIds, \DateTime $RequestStartDate, int[] $RequestSubtypeIds, int[] $RequestTypeIds);
 * @method \Nlocascio\Mindbody\Model\GetContactLogsResponse GetContactLogs(string $RequestClientId, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, bool $RequestShowSystemGenerated, int[] $RequestStaffIds, \DateTime $RequestStartDate, int[] $RequestSubtypeIds, int[] $RequestTypeIds);
 * @method \Nlocascio\Mindbody\Model\GetCrossRegionalClientAssociationsResponse clientGetCrossRegionalClientAssociations(string $RequestClientId, string $RequestEmail, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetCrossRegionalClientAssociationsResponse GetCrossRegionalClientAssociations(string $RequestClientId, string $RequestEmail, int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetCustomClientFieldsResponse clientGetCustomClientFields(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetCustomClientFieldsResponse GetCustomClientFields(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\DirectDebitInfo clientGetDirectDebitInfo(string $ClientId);
 * @method \Nlocascio\Mindbody\Model\DirectDebitInfo GetDirectDebitInfo(string $ClientId);
 * @method \Nlocascio\Mindbody\Model\GetRequiredClientFieldsResponse clientGetRequiredClientFields();
 * @method \Nlocascio\Mindbody\Model\GetRequiredClientFieldsResponse GetRequiredClientFields();
 * @method object clientSendAutoEmail(\Nlocascio\Mindbody\Model\SendAutoEmailRequest $Request);
 * @method object SendAutoEmail(\Nlocascio\Mindbody\Model\SendAutoEmailRequest $Request);
 * @method object clientSendPasswordResetEmail(\Nlocascio\Mindbody\Model\SendPasswordResetEmailRequest $Request);
 * @method object SendPasswordResetEmail(\Nlocascio\Mindbody\Model\SendPasswordResetEmailRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientResponse clientUpdateClient(\Nlocascio\Mindbody\Model\UpdateClientRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientResponse UpdateClient(\Nlocascio\Mindbody\Model\UpdateClientRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetClientRewardsResponse clientUpdateClientRewards(\Nlocascio\Mindbody\Model\UpdateClientRewardsRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetClientRewardsResponse UpdateClientRewards(\Nlocascio\Mindbody\Model\UpdateClientRewardsRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientServiceResponse clientUpdateClientService(\Nlocascio\Mindbody\Model\UpdateClientServiceRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientServiceResponse UpdateClientService(\Nlocascio\Mindbody\Model\UpdateClientServiceRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientVisitResponse clientUpdateClientVisit(\Nlocascio\Mindbody\Model\UpdateClientVisitRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateClientVisitResponse UpdateClientVisit(\Nlocascio\Mindbody\Model\UpdateClientVisitRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ContactLog clientUpdateContactLog(\Nlocascio\Mindbody\Model\UpdateContactLogRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ContactLog UpdateContactLog(\Nlocascio\Mindbody\Model\UpdateContactLogRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UploadClientDocumentResponse clientUploadClientDocument(\Nlocascio\Mindbody\Model\UploadClientDocumentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UploadClientDocumentResponse UploadClientDocument(\Nlocascio\Mindbody\Model\UploadClientDocumentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UploadClientPhotoResponse clientUploadClientPhoto(\Nlocascio\Mindbody\Model\UploadClientPhotoRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UploadClientPhotoResponse UploadClientPhoto(\Nlocascio\Mindbody\Model\UploadClientPhotoRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ClassSchedule enrollmentAddClientToEnrollment(\Nlocascio\Mindbody\Model\AddClientToEnrollmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\ClassSchedule AddClientToEnrollment(\Nlocascio\Mindbody\Model\AddClientToEnrollmentRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetEnrollmentsResponse enrollmentGetEnrollments(int[] $RequestClassScheduleIds, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetEnrollmentsResponse GetEnrollments(int[] $RequestClassScheduleIds, \DateTime $RequestEndDate, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, int[] $RequestProgramIds, int[] $RequestSessionTypeIds, int[] $RequestStaffIds, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GenerateSignedLiveStreamUrlResponse liveStreamGenerateSignedLiveStreamUrl(\Nlocascio\Mindbody\Model\GenerateSignedLiveStreamUrlRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GenerateSignedLiveStreamUrlResponse GenerateSignedLiveStreamUrl(\Nlocascio\Mindbody\Model\GenerateSignedLiveStreamUrlRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetCommissionsResponse payrollGetCommissions(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetCommissionsResponse GetCommissions(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetScheduledServiceEarningsResponse payrollGetScheduledServiceEarnings(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestScheduledServiceId, string $RequestScheduledServiceType, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetScheduledServiceEarningsResponse GetScheduledServiceEarnings(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestScheduledServiceId, string $RequestScheduledServiceType, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetTimeCardsResponse payrollGetTimeCards(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetTimeCardsResponse GetTimeCards(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetTipsResponse payrollGetTips(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetTipsResponse GetTips(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestStaffId, \DateTime $RequestStartDateTime);
 * @method object pricingOptionUpdatePricingOption(\Nlocascio\Mindbody\Model\UpdatePricingOptionRequest $Request);
 * @method object UpdatePricingOption(\Nlocascio\Mindbody\Model\UpdatePricingOptionRequest $Request);
 * @method object saleCheckoutShoppingCart(\Nlocascio\Mindbody\Model\CheckoutShoppingCartRequest $Request);
 * @method object CheckoutShoppingCart(\Nlocascio\Mindbody\Model\CheckoutShoppingCartRequest $Request);
 * @method string[] saleGetAcceptedCardTypes();
 * @method string[] GetAcceptedCardTypes();
 * @method \Nlocascio\Mindbody\Model\GetContractsResponse saleGetContracts(int $RequestLocationId, int $RequestConsumerId, int[] $RequestContractIds, int $RequestLimit, int $RequestOffset, bool $RequestSoldOnline);
 * @method \Nlocascio\Mindbody\Model\GetContractsResponse GetContracts(int $RequestLocationId, int $RequestConsumerId, int[] $RequestContractIds, int $RequestLimit, int $RequestOffset, bool $RequestSoldOnline);
 * @method \Nlocascio\Mindbody\Model\GetCustomPaymentMethodsResponse saleGetCustomPaymentMethods(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetCustomPaymentMethodsResponse GetCustomPaymentMethods(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetGiftCardBalanceResponse saleGetGiftCardBalance(string $BarcodeId);
 * @method \Nlocascio\Mindbody\Model\GetGiftCardBalanceResponse GetGiftCardBalance(string $BarcodeId);
 * @method \Nlocascio\Mindbody\Model\GetGiftCardResponse saleGetGiftCards(int[] $RequestIds, int $RequestLimit, int $RequestLocationId, int $RequestOffset, bool $RequestSoldOnline);
 * @method \Nlocascio\Mindbody\Model\GetGiftCardResponse GetGiftCards(int[] $RequestIds, int $RequestLimit, int $RequestLocationId, int $RequestOffset, bool $RequestSoldOnline);
 * @method \Nlocascio\Mindbody\Model\GetPackagesResponse saleGetPackages(int $RequestLimit, int $RequestOffset, int[] $RequestPackageIds, bool $RequestSellOnline);
 * @method \Nlocascio\Mindbody\Model\GetPackagesResponse GetPackages(int $RequestLimit, int $RequestOffset, int[] $RequestPackageIds, bool $RequestSellOnline);
 * @method \Nlocascio\Mindbody\Model\GetProductsResponse saleGetProducts(int[] $RequestCategoryIds, int $RequestLimit, int $RequestLocationId, int $RequestOffset, string[] $RequestProductIds, string $RequestSearchText, bool $RequestSellOnline, int[] $RequestSubCategoryIds);
 * @method \Nlocascio\Mindbody\Model\GetProductsResponse GetProducts(int[] $RequestCategoryIds, int $RequestLimit, int $RequestLocationId, int $RequestOffset, string[] $RequestProductIds, string $RequestSearchText, bool $RequestSellOnline, int[] $RequestSubCategoryIds);
 * @method \Nlocascio\Mindbody\Model\GetProductsInventoryResponse saleGetProductsInventory(string[] $RequestBarcodeIds, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, string[] $RequestProductIds);
 * @method \Nlocascio\Mindbody\Model\GetProductsInventoryResponse GetProductsInventory(string[] $RequestBarcodeIds, int $RequestLimit, int[] $RequestLocationIds, int $RequestOffset, string[] $RequestProductIds);
 * @method \Nlocascio\Mindbody\Model\GetSalesResponse saleGetSales(\DateTime $RequestEndSaleDateTime, int $RequestLimit, int $RequestOffset, int $RequestPaymentMethodId, int $RequestSaleId, \DateTime $RequestStartSaleDateTime);
 * @method \Nlocascio\Mindbody\Model\GetSalesResponse GetSales(\DateTime $RequestEndSaleDateTime, int $RequestLimit, int $RequestOffset, int $RequestPaymentMethodId, int $RequestSaleId, \DateTime $RequestStartSaleDateTime);
 * @method \Nlocascio\Mindbody\Model\GetServicesResponse saleGetServices(int $RequestClassId, int $RequestClassScheduleId, bool $RequestHideRelatedPrograms, bool $RequestIncludeDiscontinued, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestProgramIds, bool $RequestSellOnline, string[] $RequestServiceIds, int[] $RequestSessionTypeIds, int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetServicesResponse GetServices(int $RequestClassId, int $RequestClassScheduleId, bool $RequestHideRelatedPrograms, bool $RequestIncludeDiscontinued, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestProgramIds, bool $RequestSellOnline, string[] $RequestServiceIds, int[] $RequestSessionTypeIds, int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetTransactionsResponse saleGetTransactions(int $RequestClientId, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestSaleId, string $RequestStatus, \DateTime $RequestTransactionEndDateTime, int $RequestTransactionId, \DateTime $RequestTransactionStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetTransactionsResponse GetTransactions(int $RequestClientId, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestSaleId, string $RequestStatus, \DateTime $RequestTransactionEndDateTime, int $RequestTransactionId, \DateTime $RequestTransactionStartDateTime);
 * @method \Nlocascio\Mindbody\Model\PurchaseAccountCreditResponse salePurchaseAccountCredit(\Nlocascio\Mindbody\Model\PurchaseAccountCreditRequest $Request);
 * @method \Nlocascio\Mindbody\Model\PurchaseAccountCreditResponse PurchaseAccountCredit(\Nlocascio\Mindbody\Model\PurchaseAccountCreditRequest $Request);
 * @method \Nlocascio\Mindbody\Model\PurchaseContractResponse salePurchaseContract(\Nlocascio\Mindbody\Model\PurchaseContractRequest $Request);
 * @method \Nlocascio\Mindbody\Model\PurchaseContractResponse PurchaseContract(\Nlocascio\Mindbody\Model\PurchaseContractRequest $Request);
 * @method \Nlocascio\Mindbody\Model\PurchaseGiftCardResponse salePurchaseGiftCard(\Nlocascio\Mindbody\Model\PurchaseGiftCardRequest $Request);
 * @method \Nlocascio\Mindbody\Model\PurchaseGiftCardResponse PurchaseGiftCard(\Nlocascio\Mindbody\Model\PurchaseGiftCardRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddPromoCodeResponse siteAddPromoCode(\Nlocascio\Mindbody\Model\AddPromoCodeRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddPromoCodeResponse AddPromoCode(\Nlocascio\Mindbody\Model\AddPromoCodeRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetActivationCodeResponse siteGetActivationCode();
 * @method \Nlocascio\Mindbody\Model\GetActivationCodeResponse GetActivationCode();
 * @method \Nlocascio\Mindbody\Model\GetCategoriesResponse siteGetCategories(bool $RequestActive, int[] $RequestCategoryIds, int $RequestLimit, int $RequestOffset, bool $RequestService, int[] $RequestSubCategoryIds);
 * @method \Nlocascio\Mindbody\Model\GetCategoriesResponse GetCategories(bool $RequestActive, int[] $RequestCategoryIds, int $RequestLimit, int $RequestOffset, bool $RequestService, int[] $RequestSubCategoryIds);
 * @method \Nlocascio\Mindbody\Model\GetGendersResponse siteGetGenders();
 * @method \Nlocascio\Mindbody\Model\GetGendersResponse GetGenders();
 * @method \Nlocascio\Mindbody\Model\GetLocationsResponse siteGetLocations(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetLocationsResponse GetLocations(int $RequestLimit, int $RequestOffset);
 * @method \Nlocascio\Mindbody\Model\GetMembershipsResponse siteGetMemberships(int[] $RequestMembershipIds);
 * @method \Nlocascio\Mindbody\Model\GetMembershipsResponse GetMemberships(int[] $RequestMembershipIds);
 * @method \Nlocascio\Mindbody\Model\GetPaymentTypesResponse siteGetPaymentTypes(bool $RequestActive);
 * @method \Nlocascio\Mindbody\Model\GetPaymentTypesResponse GetPaymentTypes(bool $RequestActive);
 * @method \Nlocascio\Mindbody\Model\GetProgramsResponse siteGetPrograms(int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, string $RequestScheduleType);
 * @method \Nlocascio\Mindbody\Model\GetProgramsResponse GetPrograms(int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, string $RequestScheduleType);
 * @method \Nlocascio\Mindbody\Model\GetPromoCodesResponse siteGetPromoCodes(bool $RequestActiveOnly, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetPromoCodesResponse GetPromoCodes(bool $RequestActiveOnly, \DateTime $RequestEndDate, int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, \DateTime $RequestStartDate);
 * @method \Nlocascio\Mindbody\Model\GetResourcesResponse siteGetResources(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestSessionTypeIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetResourcesResponse GetResources(\DateTime $RequestEndDateTime, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int[] $RequestSessionTypeIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetSessionTypesResponse siteGetSessionTypes(int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, int[] $RequestProgramIDs);
 * @method \Nlocascio\Mindbody\Model\GetSessionTypesResponse GetSessionTypes(int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, int[] $RequestProgramIDs);
 * @method \Nlocascio\Mindbody\Model\GetSitesResponse siteGetSites(int $RequestLimit, int $RequestOffset, int[] $RequestSiteIds);
 * @method \Nlocascio\Mindbody\Model\GetSitesResponse GetSites(int $RequestLimit, int $RequestOffset, int[] $RequestSiteIds);
 * @method \Nlocascio\Mindbody\Model\AddStaffResponse staffAddStaff(\Nlocascio\Mindbody\Model\AddStaffRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AddStaffResponse AddStaff(\Nlocascio\Mindbody\Model\AddStaffRequest $Request);
 * @method void staffAddStaffAvailability(\Nlocascio\Mindbody\Model\AddStaffAvailabilityRequest $Request);
 * @method void AddStaffAvailability(\Nlocascio\Mindbody\Model\AddStaffAvailabilityRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AssignStaffSessionTypeResponse staffAssignStaffSessionType(\Nlocascio\Mindbody\Model\AssignStaffSessionTypeRequest $Request);
 * @method \Nlocascio\Mindbody\Model\AssignStaffSessionTypeResponse AssignStaffSessionType(\Nlocascio\Mindbody\Model\AssignStaffSessionTypeRequest $Request);
 * @method \Nlocascio\Mindbody\Model\GetStaffResponse staffGetStaff(string[] $RequestFilters, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestSessionTypeId, int[] $RequestStaffIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetStaffResponse GetStaff(string[] $RequestFilters, int $RequestLimit, int $RequestLocationId, int $RequestOffset, int $RequestSessionTypeId, int[] $RequestStaffIds, \DateTime $RequestStartDateTime);
 * @method \Nlocascio\Mindbody\Model\GetStaffPermissionsResponse staffGetStaffPermissions(int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetStaffPermissionsResponse GetStaffPermissions(int $RequestStaffId);
 * @method \Nlocascio\Mindbody\Model\GetStaffSessionTypesResponse staffGetStaffSessionTypes(int $RequestStaffId, int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, int[] $RequestProgramIds);
 * @method \Nlocascio\Mindbody\Model\GetStaffSessionTypesResponse GetStaffSessionTypes(int $RequestStaffId, int $RequestLimit, int $RequestOffset, bool $RequestOnlineOnly, int[] $RequestProgramIds);
 * @method \Nlocascio\Mindbody\Model\UpdateStaffResponse staffUpdateStaff(\Nlocascio\Mindbody\Model\UpdateStaffRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateStaffResponse UpdateStaff(\Nlocascio\Mindbody\Model\UpdateStaffRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateStaffPermissionsResponse staffUpdateStaffPermissions(\Nlocascio\Mindbody\Model\UpdateStaffPermissionsRequest $Request);
 * @method \Nlocascio\Mindbody\Model\UpdateStaffPermissionsResponse UpdateStaffPermissions(\Nlocascio\Mindbody\Model\UpdateStaffPermissionsRequest $Request);
 * @method \Nlocascio\Mindbody\Model\IssueResponse userTokenIssue(\Nlocascio\Mindbody\Model\IssueRequest $Request);
 * @method \Nlocascio\Mindbody\Model\IssueResponse Issue(\Nlocascio\Mindbody\Model\IssueRequest $Request);
 * @method object userTokenRevoke();
 * @method object Revoke();
 */
class Mindbody
{
    use ProvidesMethodToEndpointMap;
    use ProvidesMindbodyAuthorisationToken;

    private static $endpoints = [
        'appointment' => AppointmentApi::class,
        'class' => ClassApi::class,
        'client' => ClientApi::class,
        'enrollment' => EnrollmentApi::class,
        'liveStream' => LiveStreamApi::class,
        'payroll' => PayrollApi::class,
        'pricingOption' => PricingOptionApi::class,
        'sale' => SaleApi::class,
        'site' => SiteApi::class,
        'staff' => StaffApi::class,
        'userToken' => UserTokenApi::class,
    ];

    private Configuration $apiConfiguration;

    private $mindbodyApiEndpoints = [];

    public function __construct($debugFile = 'php://stderr')
    {
        $config = new Configuration();
        $config->setUserAgent(\config('mindbody.source_name'));
        $config->setApiKey('API-Key', \config('mindbody.apikey'));
        $config->setApiKey('siteId', \config('mindbody.site_id'));
        $config->setDebug(\config('mindbody.debug'));
        $config->setDebugFile('php://stderr');

        $this->apiConfiguration = $config;

        $this->mindbodyApiEndpoints = $this->initialiseApiEndpoints(
            $this->apiConfiguration,
            new GuzzleHttpClient([
                'curl' => [CURLOPT_SSL_VERIFYPEER => false],
            ]),
            new HeaderSelector(),
        );
        $this->initialiseMaps($this->mindbodyApiEndpoints);
    }

    /**
     * Instantiate the API endpoints
     *
     * @param GuzzleHttpClient $client
     * @param HeaderSelector $headerSelector
     *
     * @return array
     */
    public static function initialiseApiEndpoints(
        Configuration $apiConfiguration = null,
        GuzzleHttpClient $client = null,
        HeaderSelector $headerSelector = null,
    ): array {
        $mindbodyApiEndpoints = [];
        foreach (static::$endpoints as $endpointName => $endpointClassName) {
            $mindbodyApiEndpoints[$endpointName] = new $endpointClassName($client, $apiConfiguration, $headerSelector);
        }

        return $mindbodyApiEndpoints;
    }

    /**
     * Returns the Api endpoint corresponding to 'name'
     *
     * @param string $endpointName
     *
     * @return \Nlocascio\Mindbody\Api\ApiInterface
     * @throws MindbodyErrorException
     */
    protected function getMindbodyEndpointInstance(string $endpointName): ApiInterface
    {
        if (\array_key_exists($endpointName, $this->mindbodyApiEndpoints)) {
            return $this->mindbodyApiEndpoints[$endpointName];
        }

        throw new MindbodyErrorException('Could not find Endpoint: ' + $endpointName);
    }

    /**
     * Magic method to call an api function
     *
     * @param string $methodName
     * @param array $parameters
     *
     * @return void
     */
    public function __call(string $methodName, array $parameters)
    {
        $methodCallback = $this->getRestCallForMethod($methodName);
        $this->updateAccessToken();
        return \call_user_func_array($methodCallback, $parameters);
    }

    /**
     * @param $settings
     * @return bool
     */
    private function validateSettings($settings)
    {
        return true;
    }
}
