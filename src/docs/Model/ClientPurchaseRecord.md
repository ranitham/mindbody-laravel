# ClientPurchaseRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Sale** | [**\Nlocascio\Mindbody\Model\Sale**](Sale.md) | Contains details about the sale and payment for a purchase event. | [optional] 
**Description** | **string** | The item name and description. | [optional] 
**AccountPayment** | **bool** | If &#x60;true&#x60;, the item was a payment credited to an account. | [optional] 
**Price** | **double** | The price paid for the item. | [optional] 
**AmountPaid** | **double** | The amount paid for the item. | [optional] 
**Discount** | **double** | The discount amount that was applied to the item. | [optional] 
**Tax** | **double** | The amount of tax that was applied to the item. | [optional] 
**Returned** | **bool** | The return status of the item. If &#x60;true&#x60;, this item was returned. | [optional] 
**Quantity** | **int** | The quantity of the item purchased. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


