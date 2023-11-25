# AddStaffAvailabilityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | The ID of the staff member that availability or unavailability will be added. | 
**IsAvailability** | **bool** | When &#x60;true&#x60;, indicates that availability will be added, &lt;br /&gt;  When &#x60;false&#x60;, indicates that unavailability will be added. | 
**Description** | **string** | The description of the unavailability, ex. Lunch, Vacation. Required if IsAvailability passed as &#x60;false&#x60;.  Omit if IsAvailability passed as &#x60;true&#x60;. | [optional] 
**ProgramIds** | **int[]** | A list of program IDs. Must be a valid active schedulable Program ID. Required if IsAvailability passed as &#x60;true&#x60;.   Omit if IsAvailability passed as &#x60;false&#x60;. | [optional] 
**LocationId** | **int** | The ID of the location where the availability is added. Required if IsAvailability passed as &#x60;true&#x60;.  Omit if IsAvailability passed as &#x60;false&#x60;. | [optional] 
**DaysOfWeek** | **string[]** | The days of the week. Must contain at least one of the following Sunday, Monday, Tuesday etc. | 
**StartTime** | **string** | The start time of the schedule. Must be in HH:MM:SS format. | 
**EndTime** | **string** | The end time of the schedule. Must be in HH:MM:SS format. | 
**StartDate** | **string** | The start date of the schedule. Must be in YYYY-MM-DD format. | 
**EndDate** | **string** | The end date of the schedule. Must be in YYYY-MM-DD format. | 
**Status** | **string** | The status of availability or unavailability. Possible values are:  * Masked  * Hidden  * Public    Default: Public | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


