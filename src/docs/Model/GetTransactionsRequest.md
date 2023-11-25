# GetTransactionsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SaleId** | **int** | Filters the transaction results with the ID number associated with the sale. | [optional] 
**TransactionId** | **int** | Filters the transaction results with the ID number generated when the sale is processed. | [optional] 
**ClientId** | **int** | Filters results to the requested client ID. | [optional] 
**LocationId** | **int** | Filters the transaction results with the ID number associated with the location of the sale. | [optional] 
**Status** | **string** | Filters the transaction results by the estimated transaction status. | [optional] 
**TransactionStartDateTime** | [**\DateTime**](\DateTime.md) | Filters the transaction results that happpened after this date and time.   Default: **today’s date** | [optional] 
**TransactionEndDateTime** | [**\DateTime**](\DateTime.md) | Filters the transaction results that happpened before this date and time.   Default: **today’s date** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


