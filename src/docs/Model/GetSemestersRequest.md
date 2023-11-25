# GetSemestersRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SemesterIDs** | **int[]** | The requested semester IDs. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date for the range. All semesters that are on or after this day.  Default: **today’s date** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date for the range. All semesters that are on or before this day.  Default: **StartDate** | [optional] 
**Active** | **bool** | When true, the response only contains semesters which are activated. When false, only deactivated semesters are returned.  Default: **All semesters** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


