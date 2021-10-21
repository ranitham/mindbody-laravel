# GetEnrollmentsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassScheduleIds** | **int[]** | A list of the requested class schedule IDs. If omitted, all class schedule IDs return. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end of the date range. The response returns any active enrollments that occur on or before this day.&lt;br /&gt;  Default: **StartDate** | [optional] 
**LocationIds** | **int[]** | List of the IDs for the requested locations. If omitted, all location IDs return. | [optional] 
**ProgramIds** | **int[]** | List of the IDs for the requested programs. If omitted, all program IDs return. | [optional] 
**SessionTypeIds** | **int[]** | List of the IDs for the requested session types. If omitted, all session types IDs return. | [optional] 
**StaffIds** | **int[]** | List of the IDs for the requested staff IDs. If omitted, all staff IDs return. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start of the date range. The response returns any active enrollments that occur on or after this day.&lt;br /&gt;  Default: **today’s date** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


