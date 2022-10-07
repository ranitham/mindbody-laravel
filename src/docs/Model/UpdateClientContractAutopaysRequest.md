# UpdateClientContractAutopaysRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientContractId** | **int** | Client Contract Id | [optional] 
**AutopayStartDate** | [**\DateTime**](\DateTime.md) | Autopay start date | [optional] 
**AutopayEndDate** | [**\DateTime**](\DateTime.md) | (optional) - Indefinite if not provided | [optional] 
**ProductId** | **int** | Product Id to update (optional if contract has only one product) | [optional] 
**ReplaceWithProductId** | **int** | (optional) - Replaces the product with this product | [optional] 
**Amount** | **double** | Overrides autopay amount or amount that would come from ProductId | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


