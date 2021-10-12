# GetTransactionsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SaleId** | **int** | Filters results to the requested sale ID. | [optional] 
**TransactionId** | **int** | Filters results to the requested transaction ID. | [optional] 
**ClientId** | **int** | Filters results to the requested client ID. | [optional] 
**LocationId** | **int** | Filters results to the requested location ID. | [optional] 
**Status** | **string** | Filters results to the requested status. | [optional] 
**TransactionStartDateTime** | [**\DateTime**](\DateTime.md) | Filters results to transactions that happened after this date and time. | [optional] 
**TransactionEndDateTime** | [**\DateTime**](\DateTime.md) | Filters results to transactions that happened before this date and time. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


