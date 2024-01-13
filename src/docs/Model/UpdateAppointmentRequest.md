# UpdateAppointmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AppointmentId** | **int** | A unique ID for the appointment. | 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The end date and time of the new appointment.   &lt;br /&gt;Default: **StartDateTime**, offset by the staff member’s default appointment duration. | [optional] 
**Execute** | **string** | The action taken to add this appointment. | [optional] 
**GenderPreference** | **string** | The client’s service provider gender preference. | [optional] 
**Notes** | **string** | Any general notes about this appointment. | [optional] 
**PartnerExternalId** | **string** | Optional external key for api partners. | [optional] 
**ProviderId** | **string** | If a user has Complementary and Alternative Medicine features enabled, this parameter assigns a provider ID to the appointment. | [optional] 
**ResourceIds** | **int[]** | A list of resource IDs to associate with the new appointment. | [optional] 
**SendEmail** | **bool** | Whether to send client an email for cancellations. An email is sent only if the client has an email address and automatic emails have been set up.   &lt;br /&gt;Default: **false** | [optional] 
**SessionTypeId** | **int** | The session type associated with the new appointment. | [optional] 
**StaffId** | **int** | The ID of the staff member who is adding the new appointment. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The start date and time of the new appointment. | [optional] 
**ApplyPayment** | **bool** | When &#x60;true&#x60;, appointment will be updated with a current applicable client service from the clients account.   &lt;br /&gt;Default: **false** | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that the method is to be validated, but no new appointment data is added.   &lt;br /&gt;Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


