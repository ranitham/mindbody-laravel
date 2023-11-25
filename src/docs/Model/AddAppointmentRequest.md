# AddAppointmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ApplyPayment** | **bool** | When &#x60;true&#x60;, indicates that a payment should be applied to the appointment.   &lt;br /&gt;Default: **true** | [optional] 
**ClientId** | **string** | The RRSID of the client for whom the new appointment is being made. | 
**Duration** | **int** | The duration of the appointment. This parameter is used to change the default duration of an appointment. | [optional] 
**Execute** | **string** | The action taken to add this appointment. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The end date and time of the new appointment. &lt;br /&gt;  Default: **StartDateTime**, offset by the staff member’s default appointment duration. | [optional] 
**GenderPreference** | **string** | The client’s service provider gender preference. | [optional] 
**LocationId** | **int** | The ID of the location where the new appointment is to take place. | 
**Notes** | **string** | Any general notes about this appointment. | [optional] 
**ProviderId** | **string** | If a user has Complementary and Alternative Medicine features enabled, this parameter assigns a provider ID to the appointment. | [optional] 
**ResourceIds** | **int[]** | A list of resource IDs to associate with the new appointment. | [optional] 
**SendEmail** | **bool** | Whether to send client an email for cancellations. An email is sent only if the client has an email address and automatic emails have been set up.   &lt;br /&gt;Default: **false** | [optional] 
**SessionTypeId** | **int** | The session type associated with the new appointment. | 
**StaffId** | **int** | The ID of the staff member who is adding the new appointment. | 
**StaffRequested** | **bool** | When &#x60;true&#x60;, indicates that the staff member was requested specifically by the client. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The start date and time of the new appointment. | 
**Test** | **bool** | When true, indicates that the method is to be validated, but no new appointment data is added.   &lt;br /&gt;Default: **false** | [optional] 
**IsWaitlist** | **bool** | When &#x60;true&#x60;, indicates that the client should be added to a specific appointment waiting list.  When &#x60;false&#x60;, the client should not be added to the waiting list.  Default: **false** | [optional] 
**PartnerExternalId** | **string** | Optional external key for api partners. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


