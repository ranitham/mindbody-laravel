# CheckoutAppointmentBookingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | The ID of the staff member who is to provide the service being booked. | [optional] 
**LocationId** | **int** | The ID of the location where the appointment is to take place. | [optional] 
**SessionTypeId** | **int** | The ID of the session type of this appointment. | [optional] 
**Resources** | [**\Nlocascio\Mindbody\Model\ResourceSlim[]**](ResourceSlim.md) | Contains information about the resources to be used for the appointment. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The date and time that the appointment is to start in the business’ timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The date and time that the appointment is to end in the business’ timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss. | [optional] 
**ProviderId** | **string** | The National Provider Identifier (NPI) of the staff member who is to provide the service. For an explanation of Provider IDs, see [Provider IDs](https://support.mindbodyonline.com/s/article/204075743-Provider-IDs?language&#x3D;en_US). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


