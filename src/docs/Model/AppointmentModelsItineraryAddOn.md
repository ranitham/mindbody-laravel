# AppointmentModelsItineraryAddOn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int** | The unique identifier for the add-on. | [optional] 
**SessionTypeId** | **int** | The session type associated with the add-on. | [optional] 
**StartTime** | [**\DateTime**](\DateTime.md) | The start date and time of this add-on.  If not provided, the parent appointment&#39;s start time will be used. | [optional] 
**DurationOverrideInMinutes** | **int** | The duration of the add-on in minutes.  If not provided or 0, the parent appointment&#39;s duration will be used. | [optional] 
**Resources** | [**\Nlocascio\Mindbody\Model\AppointmentModelsAppointmentResourceInfo[]**](AppointmentModelsAppointmentResourceInfo.md) | The resources (staff and/or rooms) assigned to this add-on.  If no staff resource is provided, the parent appointment&#39;s staff will be used. | [optional] 
**Notes** | **string** | Notes for the add-on appointment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


