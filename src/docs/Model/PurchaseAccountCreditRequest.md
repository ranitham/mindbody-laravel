# PurchaseAccountCreditRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | When &#x60;true&#x60;, allows you to test the request without affecting the database.  When &#x60;false&#x60;, the request is carried out and the database is affected. | [optional] 
**LocationId** | **int** | The ID of the location where the account credit is being sold. | [optional] 
**ClientId** | **string** | The ID of the location where the account credit is being sold. | 
**SendEmailReceipt** | **bool** | When &#x60;true&#x60;, indicates that a purchase receipt email should be sent to the purchasing client, if all settings are correctly configured.&lt;br /&gt;  When &#x60;false&#x60;, no email is sent to the purchaser. | [optional] 
**SalesRepId** | **int** | The ID of the staff member to be marked as the sales rep for this account credit sale. | [optional] 
**ConsumerPresent** | **bool** | When &#x60;true&#x60;, indicates that the consumer is available to address any SCA challenge issued by the bank.  EU Only.&lt;br /&gt;   Default: **false** | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | The URL consumer is redirected to if the bank requests SCA. This field is only needed if ConsumerPresent is true. | [optional] 
**PaymentInfo** | [**\Nlocascio\Mindbody\Model\CheckoutPaymentInfo**](CheckoutPaymentInfo.md) | Contains information about the payment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


