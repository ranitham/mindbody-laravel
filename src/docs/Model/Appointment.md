# Appointment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**GenderPreference** | **string** | Prefered gender of appointment. | [optional] 
**Duration** | **int** | Duration of appointment. | [optional] 
**ProviderId** | **string** | If a user has Complementary and Alternative Medicine features enabled,  this will allow a Provider ID to be assigned to an appointment. | [optional] 
**Id** | **int** | The unique ID of the appointment. | [optional] 
**Status** | **string** | The status of this appointment. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The date and time the appointment will start. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The date and time the appointment will end. | [optional] 
**Notes** | **string** | The appointment notes. | [optional] 
**PartnerExternalId** | **string** | Optional external key for api partners. | [optional] 
**StaffRequested** | **bool** | Whether the staff member was requested specifically by the client. | [optional] 
**ProgramId** | **int** | The ID of the program this appointment belongs to. | [optional] 
**WaitlistEntryId** | **int** | The ID of the appointment waitlist. | [optional] 
**SessionTypeId** | **int** | The ID of the session type of this appointment. | [optional] 
**LocationId** | **int** | The ID of the location where this appointment will take place. | [optional] 
**StaffId** | **int** | The ID of the staff member instructing this appointment. | [optional] 
**ClientId** | **string** | The RSSID of the client booked for this appointment. | [optional] 
**FirstAppointment** | **bool** | Whether this is the client&#39;s first appointment at the site. | [optional] 
**ClientServiceId** | **int** | The ID of the pass on the client&#39;s account that is paying for this appointment. | [optional] 
**Resources** | [**\Nlocascio\Mindbody\Model\Resource[]**](Resource.md) | The resources this appointment is using. | [optional] 
**AddOns** | [**\Nlocascio\Mindbody\Model\AddOnSmall[]**](AddOnSmall.md) | The Add-Ons Associated with this appointment | [optional] 
**IsWaitlist** | **bool** | Whether to add appointment to waitlist. | [optional] 
**OnlineDescription** | **string** | Online Description associated with the appointment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


