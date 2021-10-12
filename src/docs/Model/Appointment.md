# Appointment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**GenderPreference** | **string** | The preferred gender of the appointment provider. | [optional] 
**Duration** | **int** | The duration of the appointment. | [optional] 
**ProviderId** | **string** | If a user has Complementary and Alternative Medicine features enabled, this property indicates the provider assigned to the appointment. | [optional] 
**Id** | **int** | The unique ID of the appointment. | [optional] 
**Status** | **string** | The status of this appointment. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The date and time the appointment is to start. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The date and time the appointment is to end. | [optional] 
**Notes** | **string** | Any notes associated with the appointment. | [optional] 
**StaffRequested** | **bool** | When &#x60;true&#x60;, indicates that the staff member was requested specifically by the client. | [optional] 
**ProgramId** | **int** | The ID of the program to which this appointment belongs. | [optional] 
**SessionTypeId** | **int** | The ID of the session type of this appointment. | [optional] 
**LocationId** | **int** | The ID of the location where this appointment is to take place. | [optional] 
**StaffId** | **int** | The ID of the staff member providing the service for this appointment. | [optional] 
**ClientId** | **string** | The RSSID of the client who is booked for this appointment. | [optional] 
**FirstAppointment** | **bool** | When &#x60;true&#x60;, indicates that this is the client’s first appointment at this site. | [optional] 
**ClientServiceId** | **int** | The ID of the pass on the client’s account that is to pay for this appointment. | [optional] 
**Resources** | [**\Nlocascio\Mindbody\Model\Resource[]**](Resource.md) | The resources this appointment is to use. | [optional] 
**AddOns** | [**\Nlocascio\Mindbody\Model\AddOnSmall[]**](AddOnSmall.md) | Any AddOns associated with the appointment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


