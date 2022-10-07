# GetCoursesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**LocationIDs** | **int[]** | (optional) The requested locations. | [optional] 
**CourseIDs** | **int[]** | (optional) The requested course IDs. | [optional] 
**StaffIDs** | **int[]** | (optional) The requested StaffIDs. | [optional] 
**ProgramIDs** | **int[]** | (optional) The requested program IDs. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date range. Any active courses that are on or after this day.  &lt;br /&gt;(optional) Defaults to today. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date range. Any active courses that are on or before this day.  &lt;br /&gt;(optional) Defaults to StartDate. | [optional] 
**SemesterIDs** | **int[]** | (optional) The requested semester IDs. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


