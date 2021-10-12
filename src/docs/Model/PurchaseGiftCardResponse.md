# PurchaseGiftCardResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**BarcodeId** | **string** | The barcode ID assigned to the purchased gift card. | [optional] 
**Value** | **double** | The monetary value of the gift card. | [optional] 
**AmountPaid** | **double** | The amount paid for the gift card by the purchaser. | [optional] 
**FromName** | **string** | The name of the purchaser. | [optional] 
**LayoutId** | **int** | The ID of the layout used for this gift card. | [optional] 
**EmailReceipt** | **bool** | Whether or not an email receipt was sent to the purchaser. If true, a receipt was sent. | [optional] 
**PurchaserClientId** | **string** | The client ID of the purchaser. | [optional] 
**PurchaserEmail** | **string** | The purchaser’s email address. | [optional] 
**RecipientEmail** | **string** | The recipient’s email address. | [optional] 
**SaleId** | **int** | The sale ID of the gift card. | [optional] 
**PaymentProcessingFailures** | [**\Nlocascio\Mindbody\Model\PaymentProcessingFailure[]**](PaymentProcessingFailure.md) | Any cart processing failures, for example when SCA challenged, the cart is in PaymentAuthenticationRequired state and at least one of the failures listed will provide an authentication Url. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


