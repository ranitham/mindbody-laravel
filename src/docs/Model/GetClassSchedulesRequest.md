# GetClassSchedulesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassScheduleIds** | **int[]** | The class schedule IDs.  &lt;br /&gt;Default: **all** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date of the range. Return any active enrollments that occur on or before this day.  &lt;br /&gt;Default: **StartDate** | [optional] 
**LocationIds** | **int[]** | The location IDs.   &lt;br /&gt;Default: **all** | [optional] 
**ProgramIds** | **int[]** | The program IDs.   &lt;br /&gt;Default: **all** | [optional] 
**SessionTypeIds** | **int[]** | The session type IDs.   &lt;br /&gt;Default: **all** | [optional] 
**StaffIds** | **int[]** | The staff IDs.   &lt;br /&gt;Default: **all** | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date of the range. Return any active enrollments that occur on or after this day.  &lt;br /&gt;Default: **today’s date** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


