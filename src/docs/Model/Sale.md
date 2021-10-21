# Sale

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int** | The sale ID. | [optional] 
**SaleDate** | [**\DateTime**](\DateTime.md) | The date the item was sold. | [optional] 
**SaleTime** | **string** | The time the item was sold. | [optional] 
**SaleDateTime** | [**\DateTime**](\DateTime.md) | The date and time the item was sold. | [optional] 
**OriginalSaleDateTime** | [**\DateTime**](\DateTime.md) | The date and time the item was sold originally. | [optional] 
**SalesRepId** | **int** | The sales representative ID | [optional] 
**ClientId** | **string** | The ID of the client who made the purchase. | [optional] 
**RecipientClientId** | **int** | Recipient Client Id | [optional] 
**PurchasedItems** | [**\Nlocascio\Mindbody\Model\PurchasedItem[]**](PurchasedItem.md) | Contains information that describes the purchased items. | [optional] 
**LocationId** | **int** | The ID of the location where the sale takes place. | [optional] 
**Payments** | [**\Nlocascio\Mindbody\Model\SalePayment[]**](SalePayment.md) | Contains information that describes the payments that contributed to this sale. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


