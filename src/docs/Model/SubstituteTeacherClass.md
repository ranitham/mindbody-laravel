# SubstituteTeacherClass

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassScheduleId** | **int** | The class schedule ID of the requested class. | [optional] 
**Location** | [**\Nlocascio\Mindbody\Model\Location**](Location.md) | Contains information about the location where the class is taking place. | [optional] 
**MaxCapacity** | **int** | The total number of bookings allowed in the class. | [optional] 
**WebCapacity** | **int** | The total number of online bookings allowed in the class. | [optional] 
**TotalBooked** | **int** | The total number of clients who are booked into the class prior to this call being made. | [optional] 
**TotalBookedWaitlist** | **int** | The total number of booked clients who are on the waiting list for the class prior to this call being made. | [optional] 
**WebBooked** | **int** | The total number of bookings in the class made by online users, prior to this call being made. This property is the current number of bookings counted toward the &#x60;WebCapacity&#x60; limit. | [optional] 
**SemesterId** | **int** | Identifies the semester assigned to this class. | [optional] 
**IsCanceled** | **bool** | When &#x60;true&#x60;, indicates that the class has been canceled.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class has not been canceled and may still be bookable. | [optional] 
**Substitute** | **bool** | When &#x60;true&#x60;, indicates that the class is being taught by a substitute teacher. | [optional] 
**Active** | **bool** | When &#x60;true&#x60;, indicates that the class is being shown to clients in consumer mode. | [optional] 
**IsWaitlistAvailable** | **bool** | When &#x60;true&#x60;, indicates that the class has a waiting list and there is space available on the waiting list for another client.&lt;br /&gt;  When &#x60;false&#x60;, indicates either that the class does not have a waiting list or there is no space available on the class waiting list. | [optional] 
**HideCancel** | **bool** | When &#x60;true&#x60;, indicates that this class is should not be shown to clients when &#x60;IsCancelled&#x60; is &#x60;true&#x60;.&lt;br /&gt;  When &#x60;false&#x60;, indicates that this class is should be shown to clients when &#x60;IsCancelled&#x60; is &#x60;true&#x60;.&lt;br /&gt;  This property can be ignored when the &#x60;IsCancelled&#x60; property is &#x60;false&#x60;. | [optional] 
**Id** | **int** | The unique identifier of the class. | [optional] 
**IsAvailable** | **bool** | When &#x60;true&#x60;, indicates that the class can be booked.&lt;br /&gt;  When &#x60;false&#x60;, that the class cannot be booked at this time. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The date and time that this class is scheduled to start. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The date and time when this class is scheduled to end. | [optional] 
**LastModifiedDateTime** | [**\DateTime**](\DateTime.md) | The last time the class was modified. | [optional] 
**ClassDescription** | [**\Nlocascio\Mindbody\Model\ClassDescription**](ClassDescription.md) | Contains information about this class. | [optional] 
**Staff** | [**\Nlocascio\Mindbody\Model\Staff**](Staff.md) | Contains information about the teacher of the class. | [optional] 
**VirtualStreamLink** | **string** | The URL for the pre-recorded live stream for the class if hosted on the mindbody virtual wellness platform | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


