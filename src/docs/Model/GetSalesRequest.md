# GetSalesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SaleId** | **int** | Filters results to the requested sale ID. | [optional] 
**StartSaleDateTime** | [**\DateTime**](\DateTime.md) | Filters results to sales that happened after this date and time. | [optional] 
**EndSaleDateTime** | [**\DateTime**](\DateTime.md) | Filters results to sales that happened before this date and time. | [optional] 
**PaymentMethodId** | **int** | Filters results to sales paid for by the given payment method ID. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


