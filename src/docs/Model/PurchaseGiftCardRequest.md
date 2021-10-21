# PurchaseGiftCardRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | When &#x60;true&#x60;, allows you to test the request without affecting the database.&lt;br /&gt;  When &#x60;false&#x60;, the request is carried out and the database is affected. | [optional] 
**LocationId** | **int** | The ID of the location where the gift card is being sold. | 
**LayoutId** | **int** | The ID of the layout used for the gift card’s image. | [optional] 
**PurchaserClientId** | **string** | The RSSID of the client who is purchasing the gift card. | 
**GiftCardId** | **int** | The product ID of the gift card being purchased. | 
**SendEmailReceipt** | **bool** | When &#x60;true&#x60;, indicates that a purchase receipt email should be sent to the purchasing client, if all settings are correctly configured.&lt;br /&gt;  When &#x60;false&#x60;, no email is sent to the purchaser. | [optional] 
**RecipientEmail** | **string** | The email address to send the gift card image to. This parameter is required if the &#x60;LayoutId&#x60; is not 0.&lt;br /&gt;  Maximum length: **100** | [optional] 
**RecipientName** | **string** | The name of the person who is to receive the gift card. This parameter is required if the &#x60;LayoutId&#x60; is not 0.&lt;br /&gt;  Maximum length: **20** | [optional] 
**Title** | **string** | The text to use as the title of the gift card, for example: Happy Birthday, Maria! This parameter is required if the &#x60;LayoutId&#x60; is not 0.&lt;br /&gt;  Maximum length: **20** | [optional] 
**GiftMessage** | **string** | A personal message to include in the gift card.&lt;br /&gt;  Maximum length: **300** | [optional] 
**DeliveryDate** | [**\DateTime**](\DateTime.md) | The date that the gift card’s image is to be delivered to the recipient. This parameter cannot be set to a date in the past. This parameter is required if the &#x60;LayoutId&#x60; is not 0.  Default: **today**  Minimum: **today** | [optional] 
**PaymentInfo** | [**\Nlocascio\Mindbody\Model\CheckoutPaymentInfo**](CheckoutPaymentInfo.md) | Contains information about the payment. | [optional] 
**SalesRepId** | **int** | The ID of the staff member who is to be marked as the sales rep for this gift card purchase. | [optional] 
**ConsumerPresent** | **bool** | When &#x60;true&#x60;, indicates that the consumer is available to address any SCA challenge issued by the bank.  EU Only.&lt;br /&gt;   Default: **false** | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | This is the Url the consumer will be redirected back to after completion of the Banks SCA challenge. | [optional] 
**BarcodeId** | **string** | Sets the barcode ID of the giftcard. When not provided, a barcode ID is automatically generated.&lt;br /&gt;  If a giftcard with the given barcode ID already exists and the site supports reloadable giftcards, the existing giftcard is reloaded&lt;br /&gt;  Maximum length: **100** | [optional] 
**SenderName** | **string** | Overrides the name that would otherwise be populated by specifying PurchaserClientId.&lt;br /&gt;  Maximum length: **20** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


