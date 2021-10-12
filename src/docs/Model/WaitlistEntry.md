# WaitlistEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassDate** | [**\DateTime**](\DateTime.md) | The date of the class or enrollment. | [optional] 
**ClassId** | **int** | The ID of the class or enrollment. | [optional] 
**ClassSchedule** | [**\Nlocascio\Mindbody\Model\ClassSchedule**](ClassSchedule.md) | Contains information about the class schedule for this waiting list entry. | [optional] 
**Client** | [**\Nlocascio\Mindbody\Model\Client**](Client.md) | Contains information about the requested client who is on the waiting list. | [optional] 
**EnrollmentDateForward** | [**\DateTime**](\DateTime.md) | If the waiting list entry was created for an enrollment, this is the date on or after which the client can be added to the enrollment from the waitlist. | [optional] 
**Id** | **int** | The ID of the waiting list entry. | [optional] 
**RequestDateTime** | [**\DateTime**](\DateTime.md) | The date and time that the request to be on the waiting list was made. | [optional] 
**VisitRefNo** | **int** | The ID of the visit that is associated with the waiting list entry. | [optional] 
**Web** | **bool** | If &#x60;true&#x60;, the entry on the waiting list was requested online.&lt;br /&gt;  If &#x60;false&#x60;, the entry on the waiting list was requested off-line, for example in person or by phone. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


