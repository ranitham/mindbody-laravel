# GetCoursesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**LocationIDs** | **int[]** | Return only courses that are available for the specified LocationIds. | [optional] 
**CourseIDs** | **int[]** | Return only courses that are available for the specified CourseIds. | [optional] 
**StaffIDs** | **int[]** | Return only courses that are available for the specified StaffIds. | [optional] 
**ProgramIDs** | **int[]** | Return only courses that are available for the specified ProgramIds. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date range. Any active courses that are on or after this day.  &lt;br /&gt;(optional) Defaults to today. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date range. Any active courses that are on or before this day.  &lt;br /&gt;(optional) Defaults to StartDate. | [optional] 
**SemesterIDs** | **int[]** | Return only courses that are available for the specified SemesterIds. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


