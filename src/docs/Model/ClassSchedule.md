# ClassSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Classes** | [**\Nlocascio\Mindbody\Model\ModelClass[]**](ModelClass.md) | Contains information about classes. | [optional] 
**Clients** | [**\Nlocascio\Mindbody\Model\Client[]**](Client.md) | Contains information about clients. | [optional] 
**Course** | [**\Nlocascio\Mindbody\Model\Course**](Course.md) | Contains information about the course that the enrollment is a part of. | [optional] 
**SemesterId** | **int** | The semester ID for the enrollment (if any). | [optional] 
**IsAvailable** | **bool** | When &#x60;true&#x60;, indicates that the enrollment shows in consumer mode, has not started yet, and there is room in each class of the enrollment.&lt;br /&gt;  When &#x60;false&#x60;, indicates that either the enrollment does not show in consumer mode, has already started, or there is no room in some classes of the enrollment. | [optional] 
**Id** | **int** | The unique ID of the class schedule. | [optional] 
**ClassDescription** | [**\Nlocascio\Mindbody\Model\ClassDescription**](ClassDescription.md) | Contains information about the class. | [optional] 
**DaySunday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Sundays. | [optional] 
**DayMonday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Mondays. | [optional] 
**DayTuesday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Tuesdays. | [optional] 
**DayWednesday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Wednesdays. | [optional] 
**DayThursday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Thursdays. | [optional] 
**DayFriday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Fridays. | [optional] 
**DaySaturday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Saturdays. | [optional] 
**AllowOpenEnrollment** | **bool** | When &#x60;true&#x60;, indicates that the enrollment allows booking after the enrollment has started. | [optional] 
**AllowDateForwardEnrollment** | **bool** | When &#x60;true&#x60;, indicates that this the enrollment shows in consumer mode, the enrollment has not started yet, and there is room in each class of the enrollment. | [optional] 
**StartTime** | [**\DateTime**](\DateTime.md) | The time this class schedule starts. | [optional] 
**EndTime** | [**\DateTime**](\DateTime.md) | The time this class schedule ends. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The date this class schedule starts. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The date this class schedule ends. | [optional] 
**Staff** | [**\Nlocascio\Mindbody\Model\Staff**](Staff.md) | Contains information about the staff member who is regularly scheduled to teach the class. | [optional] 
**Location** | [**\Nlocascio\Mindbody\Model\Location**](Location.md) | Contains information about the regularly scheduled location of this class. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


