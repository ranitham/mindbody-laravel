# ModelClass

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassScheduleId** | **int** | The ID used to retrieve the class schedule for the desired class. | [optional] 
**Visits** | [**\Nlocascio\Mindbody\Model\Visit[]**](Visit.md) | Contains information about visits. | [optional] 
**Clients** | [**\Nlocascio\Mindbody\Model\Client[]**](Client.md) | Contains information about clients. | [optional] 
**Location** | [**\Nlocascio\Mindbody\Model\Location**](Location.md) | Contains information about a location. | [optional] 
**Resource** | [**\Nlocascio\Mindbody\Model\Resource**](Resource.md) | Contains information about a resource, such as a room, assigned to a class. | [optional] 
**MaxCapacity** | **int** | The maximum number of clients allowed in the class. | [optional] 
**WebCapacity** | **int** | The maximum number of clients allowed to sign up online for the class. | [optional] 
**TotalBooked** | **int** | The total number of clients booked in the class. | [optional] 
**TotalBookedWaitlist** | **int** | The total number of booked clients on the waiting list for the class. | [optional] 
**WebBooked** | **int** | The total number of clients who signed up online for the class. | [optional] 
**SemesterId** | **int** | The ID of the semester that the class is a part of, if any. | [optional] 
**IsCanceled** | **bool** | When &#x60;true&#x60;, indicates that the class has been cancelled.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class has not been cancelled. | [optional] 
**Substitute** | **bool** | When &#x60;true&#x60;, indicates that the class is being taught by a substitute teacher.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class is being taught by its regular teacher. | [optional] 
**Active** | **bool** | When &#x60;true&#x60;, indicates that the class is shown to clients when in consumer mode.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class is not shown to clients when in consumer mode. | [optional] 
**IsWaitlistAvailable** | **bool** | When &#x60;true&#x60;, indicates that the clients can be placed on a waiting list for the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the clients cannot be placed on a waiting list for the class. | [optional] 
**IsEnrolled** | **bool** | When &#x60;true&#x60;, indicates that the client with the given &#x60;ClientId&#x60; is enrolled in this class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client with the given &#x60;ClientId&#x60; is not enrolled in this class. | [optional] 
**HideCancel** | **bool** | When &#x60;true&#x60;, indicates that this class is hidden when cancelled.&lt;br /&gt;  When &#x60;false&#x60;, indicates that this class is not hidden when cancelled. | [optional] 
**Id** | **int** | The unique identifier for the class. | [optional] 
**IsAvailable** | **bool** | When &#x60;true&#x60;, indicates that the client with the given client ID can book this class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client with the given client ID cannot book this class. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The time this class is scheduled to start. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The time this class is scheduled to end. | [optional] 
**LastModifiedDateTime** | [**\DateTime**](\DateTime.md) | The last time this class was modified. | [optional] 
**ClassDescription** | [**\Nlocascio\Mindbody\Model\ClassDescription**](ClassDescription.md) | Contains information that defines the class. | [optional] 
**Staff** | [**\Nlocascio\Mindbody\Model\Staff**](Staff.md) | Contains information about the staff member. | [optional] 
**BookingWindow** | [**\Nlocascio\Mindbody\Model\BookingWindow**](BookingWindow.md) | Contains information about the window for booking. | [optional] 
**BookingStatus** | **string** | Contains the booking’s payment status. | [optional] 
**VirtualStreamLink** | **string** | The URL for the live stream for the class if hosted on the mindbody virtual wellness platform | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


