# GetResourcesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SessionTypeIds** | **int[]** | List of session type IDs.&lt;br /&gt;  Default: **all** | [optional] 
**LocationId** | **int** | The location of the resource. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set.&lt;br /&gt;  Default: **all** | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The time the resource starts. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The time the resource ends. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


