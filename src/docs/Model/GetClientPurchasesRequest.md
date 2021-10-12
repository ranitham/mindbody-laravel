# GetClientPurchasesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client you are querying for purchases. | 
**StartDate** | [**\DateTime**](\DateTime.md) | Filters results to purchases made on or after this timestamp.&lt;br /&gt;  Default: **now** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | Filters results to purchases made before this timestamp.&lt;br /&gt;  Default: **end of today** | [optional] 
**SaleId** | **int** | Filters results to the single record associated with this ID. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


