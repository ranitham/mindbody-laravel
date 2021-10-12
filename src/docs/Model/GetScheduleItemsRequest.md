# GetScheduleItemsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**LocationIds** | **int[]** | A list of requested location IDs. | [optional] 
**StaffIds** | **int[]** | A list of requested staff IDs. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional] 
**IgnorePrepFinishTimes** | **bool** | When &#x60;true&#x60;, appointment preparation and finish unavailabilities are not returned.   &lt;br /&gt;Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


