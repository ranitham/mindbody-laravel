# GetClientContractsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client. | 
**CrossRegionalLookup** | **bool** | When &#x60;true&#x60;, indicates that the requesting client’s cross regional contracts are returned, if any.&lt;br /&gt;  When &#x60;false&#x60;, indicates that cross regional contracts are not returned. | [optional] 
**ClientAssociatedSitesOffset** | **int** | Determines how many sites are skipped over when retrieving a client’s cross regional contracts. Used when a client ID is linked to more than ten sites in an organization. Only a maximum of ten site databases are queried when this call is made and &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;. To change which sites are queried, change this offset value.  Default: **0** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


