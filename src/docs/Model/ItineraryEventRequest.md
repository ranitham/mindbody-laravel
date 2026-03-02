# ItineraryEventRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SessionTypeId** | **int** | The session type (service) associated with this event. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The start date and time of this event. | [optional] 
**Duration** | **int** | The duration of the event in minutes. If not provided or 0, the service&#39;s default duration is used. | [optional] 
**Notes** | **string** | Any notes specific to this event. | [optional] 
**StaffRequested** | **bool** | When &#x60;true&#x60;, indicates that the staff member was requested specifically by the client. | [optional] 
**StaffId** | **int** | The ID of the staff member for this event. Optional if using waitlist or if staff assignment is flexible. | [optional] 
**ResourceIds** | **int[]** | A list of resource IDs (rooms, equipment) to associate with this event. | [optional] 
**AddOns** | [**\Nlocascio\Mindbody\Model\AppointmentModelsItineraryAddOn[]**](AppointmentModelsItineraryAddOn.md) | A list of add-on services attached to this event. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


