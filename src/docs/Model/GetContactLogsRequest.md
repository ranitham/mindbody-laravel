# GetContactLogsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client whose contact logs are being requested. | 
**StartDate** | [**\DateTime**](\DateTime.md) | Filters the results to contact logs created on or after this date.&lt;br /&gt;  Default: **the current date** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | Filters the results to contact logs created before this date.&lt;br /&gt;  Default: **the start date** | [optional] 
**StaffIds** | **int[]** | Filters the results to return contact logs assigned to one or more staff IDs. | [optional] 
**ShowSystemGenerated** | **bool** | When &#x60;true&#x60;, system-generated contact logs are returned in the results.&lt;br /&gt;  Default: **false** | [optional] 
**TypeIds** | **int[]** | Filters the results to contact logs assigned one or more of these type IDs. | [optional] 
**SubtypeIds** | **int[]** | Filters the results to contact logs assigned one or more of these subtype IDs. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


