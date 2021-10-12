# PurchaseAccountCreditRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | When &#x60;true&#x60;, the Public API validates input information, but does not commit it, so no client data is affected.&lt;br /&gt;  When &#x60;false&#x60; or omitted, the transaction is committed, and client data is affected.&lt;br /&gt;  Default: **false** | [optional] 
**LocationId** | **int** | The ID of the location where the client is purchasing the contract; used for AutoPays. | [optional] 
**ClientId** | **string** | The ID of the client. Note that this is not the same as the client’s unique ID. | 
**SendEmailReceipt** | **bool** | When &#x60;true&#x60;, indicates that a purchase receipt email should be sent to the purchasing client, if all settings are correctly configured.&lt;br /&gt;  When &#x60;false&#x60;, no email is sent to the purchaser. | [optional] 
**SalesRepId** | **int** | The ID of the staff member who is to be marked as the sales rep for this gift card purchase. | [optional] 
**ConsumerPresent** | **bool** | When &#x60;true&#x60;, indicates that the consumer is available to address any SCA challenge issued by the bank.  EU Only.&lt;br /&gt;   Default: **false** | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | This is the Url the consumer will be redirected back to after completion of the Banks SCA challenge. | [optional] 
**PaymentInfo** | [**\Nlocascio\Mindbody\Model\CheckoutPaymentInfo**](CheckoutPaymentInfo.md) | Contains information about the payment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


