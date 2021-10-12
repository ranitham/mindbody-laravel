# CheckoutShoppingCartRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**CartId** | **string** | The unique ID of the shopping cart to be processed. You can use this value to maintain a persistent cart. If you do not specify a cart ID, the MINDBODY software generates one. | [optional] 
**ClientId** | **string** | The RSSID of the client making the purchase. A cart can be validated without a client ID, but a client ID must be specified to complete a sale. | 
**Test** | **bool** | When &#x60;true&#x60;, indicates that the contents of the cart are validated, but the transaction does not take place. You should use this parameter during testing and when checking the calculated totals of the items in the cart.&lt;br /&gt;  When &#x60;false&#x60;, the transaction takes place and the database is affected.&lt;br /&gt;  Default: **false** | [optional] 
**Items** | [**\Nlocascio\Mindbody\Model\CheckoutItemWrapper[]**](CheckoutItemWrapper.md) | A list of the items in the cart. | 
**InStore** | **bool** | When &#x60;true&#x60;, indicates that the cart is to be completed by a staff member and is to take place at one of the business’ physical locations.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the cart is to be completed by a client from the business’ online store.&lt;br /&gt;  Default: **false** | [optional] 
**CalculateTax** | **bool** | If true tax calculation should be done. | [optional] 
**PromotionCode** | **string** | Promotion code to be applied to the cart. | [optional] 
**Payments** | [**\Nlocascio\Mindbody\Model\CheckoutPaymentInfo[]**](CheckoutPaymentInfo.md) | A list of payment information objects to be applied to payment against the items in the cart. | 
**SendEmail** | **bool** | When &#x60;true&#x60;, sends a purchase receipt email to the client. Note that all appropriate permissions and settings must be enabled for the client to receive an email.&lt;br /&gt;  Default: **false** | [optional] 
**LocationId** | **int** | The location ID to be used for pulling business mode prices and taxes. If no location ID is supplied, it defaults to the online store, represented by a null value.   Default: **null** (the online store) | [optional] 
**Image** | **string** | The byte array data of the signature image. | [optional] 
**ImageFileName** | **string** | The name of the signature image being uploaded. | [optional] 
**ConsumerPresent** | **bool** | Set to true to indicate that the consumer is present.    Used in conjunction with EU SCA requirements.  If true you must also provide a PaymentAuthenticationCallbackUrl for consumer authorization of the transaction | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | The URL that the EU consumer is redirected to upon authorizing the transaction with the bank&#39;s SCA (Strong Customer Authentication) challenge | [optional] 
**TransactionIds** | **int[]** | The list of TransactionIds provided with initial response containing SCA Challenge URLs for ConsumerPresent transactions | [optional] 
**IsBillingPostalCodeRequired** | **bool** | the flag to check billing post code is required or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


