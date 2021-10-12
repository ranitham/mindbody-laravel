# AddStaffAvailabilityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | The unique id of the staff | 
**IsAvailability** | **bool** | IsAvailability &#x3D; true means this is staff available schedule, false means unavailability | 
**Description** | **string** | Description is required if IsAvailability&#x3D;false | [optional] 
**ProgramIds** | **int[]** | List of ProgramIds - for session types the staff member performs, required if IsAvailability&#x3D;true must be an Active ProgramId between 1 and 21 | [optional] 
**LocationId** | **int** | The Location for the Availability, will default to 0 when isAvailability&#x3D;false | [optional] 
**DaysOfWeek** | **string[]** | Day of week for the schedule \&quot;Monday\&quot;, \&quot;Tuesday\&quot;, etc... | 
**StartTime** | **string** | The starting time in site local time format \&quot;HH:MM:SS\&quot; | 
**EndTime** | **string** | The ending time in site local time format \&quot;HH:MM:SS\&quot; | 
**StartDate** | **string** | The ending time in site local time format \&quot;HH:MM:SS\&quot; | 
**EndDate** | **string** | The ending time in site local time format \&quot;HH:MM:SS\&quot; | 
**Status** | **string** | one of \&quot;Public\&quot;, \&quot;Masked\&quot;, \&quot;Hidden\&quot;, default \&quot;Public\&quot;) - Schedule privacy. \&quot;Masked\&quot; only valid if IsAavailability&#x3D;true | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


