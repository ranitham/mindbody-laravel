# GetContractsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ContractIds** | **int[]** | When included, the response only contains details about the specified contract IDs. | [optional] 
**SoldOnline** | **bool** | When &#x60;true&#x60;, the response only contains details about contracts and AutoPay options that can be sold online.   When &#x60;false&#x60;, all contracts are returned.  Default: **false** | [optional] 
**LocationId** | **int** | The ID of the location that has the requested contracts and AutoPay options. | 
**ConsumerId** | **int** | The ID of the client. | [optional] 
**PromoCode** | **string** | PromoCode to apply | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


