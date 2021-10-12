# AddClientToEnrollmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client who is being booked into the enrollment. | 
**ClassScheduleId** | **int** | The ID of the class schedule (enrollment) into which the client is being booked. | 
**EnrollDateForward** | [**\DateTime**](\DateTime.md) | Enroll the clients from this date forward. &#x60;EnrollDateForward&#x60; takes priority over open enrollment. | [optional] 
**EnrollOpen** | [**\DateTime[]**](\DateTime.md) | Enroll for selected days. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, input information is validated, but not committed.&lt;br /&gt;  Default: **false** | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. An email is only sent if the client has an email address and automatic emails have been set up.&lt;br /&gt;  Default: **false** | [optional] 
**Waitlist** | **bool** | When &#x60;true&#x60;, the client is added to a specific enrollments waiting list. | [optional] 
**WaitlistEntryId** | **int** | The waiting list entry to add. Used to add a client to an enrollment from a waiting list entry. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


