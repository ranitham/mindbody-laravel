# GetClientRewardsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client whose reward information is being requested. | 
**StartDate** | [**\DateTime**](\DateTime.md) | Filters the results to rewards transactions created on or after this date.&lt;br /&gt;  Default: **the current date** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | Filters the results to rewards transactions created before this date.&lt;br /&gt;  Default: **the start date** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


