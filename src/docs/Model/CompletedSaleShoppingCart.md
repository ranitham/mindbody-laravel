# CompletedSaleShoppingCart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **string** | The shopping cart ID. | [optional] 
**CartItems** | [**\Nlocascio\Mindbody\Model\CompletedSaleCartItem[]**](CompletedSaleCartItem.md) | Contains information about the items in the shopping cart. | [optional] 
**SubTotal** | **double** | The cart’s total cost before taxes and discounts were applied. | [optional] 
**DiscountTotal** | **double** | The monetary amount removed from the cart’s total cost by applied discounts. | [optional] 
**TaxTotal** | **double** | The monetary amount paid in taxes, included in the cart’s &#x60;GrandTotal&#x60;. | [optional] 
**GrandTotal** | **double** | The cart’s total cost, including taxes and discounts. | [optional] 
**Transactions** | [**\Nlocascio\Mindbody\Model\CompletedSaleTransactionResponse[]**](CompletedSaleTransactionResponse.md) | Contains information returned from the first call to CheckoutShoppingCart. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


