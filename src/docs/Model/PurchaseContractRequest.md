# PurchaseContractRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | When &#x60;true&#x60;, the Public API validates input information, but does not commit it, so no client data is affected.&lt;br /&gt;  When &#x60;false&#x60; or omitted, the transaction is committed, and client data is affected.&lt;br /&gt;  Default: **false** | [optional] 
**LocationId** | **int** | The ID of the location where the client is purchasing the contract; used for AutoPays. | [optional] 
**ClientId** | **string** | The ID of the client. Note that this is not the same as the client’s unique ID. | 
**ContractId** | **int** | The ID of the contract being purchased. | 
**StartDate** | [**\DateTime**](\DateTime.md) | The date that the contract starts.&lt;br /&gt;  Default: **today’s date** | [optional] 
**FirstPaymentOccurs** | **string** | The date on which the first payment is to occur. Possible values:  * Instant  * &#x60;StartDate&#x60; | [optional] 
**ClientSignature** | **string** | A representation of the client’s signature. This value can take the form of Base64-encoded byte array. The file type should be PNG. The picture of the client’s signature is uploaded and viewable from the Client Documents page in the Core Business Mode software. The title of the document is:&lt;br /&gt;  clientContractSignature-{uniquePurchasedClientContractID}-{contractName}-{contractStartDate}.{fileType} | [optional] 
**PromotionCode** | **string** | A promotion code, if one applies. Promotion codes are applied to items that are both marked as pay now in a contract and are discounted by the promotion code. If a pay now item is an autopay item, its autopay price is the price at the time of checkout, so, if a promotion code was applied, all autopays are scheduled using that discounted price. | [optional] 
**PromotionCodes** | **string[]** | Promotion codes, if they apply. Promotion codes are applied to items that are both marked as pay now in a contract and are discounted by the promotion code. If a pay now item is an autopay item, its autopay price is the price at the time of checkout, so, if a promotion code was applied, all autopays are scheduled using that discounted price. | [optional] 
**CreditCardInfo** | [**\Nlocascio\Mindbody\Model\CreditCardInfo**](CreditCardInfo.md) | Contains credit card payment information.&lt;br /&gt;  This is only required if &#x60;StoredCardInfo&#x60; is not passed and &#x60;UseDirectDebit&#x60; is &#x60;false&#x60;. | [optional] 
**StoredCardInfo** | [**\Nlocascio\Mindbody\Model\StoredCardInfo**](StoredCardInfo.md) | Contains information about the stored credit card payment.&lt;br /&gt;  This is only required if &#x60;CreditCardInfo&#x60; is not passed and &#x60;UseDirectDebit&#x60; is &#x60;false&#x60;. | [optional] 
**SendNotifications** | **bool** | When &#x60;true&#x60;, indicates that email and SMS notifications should be sent to the client after purchase.&lt;br /&gt;  Default: **true** | [optional] 
**SalesRepId** | **int** | The ID of the staff member to be marked as the sales rep for this contract sale. | [optional] 
**UseDirectDebit** | **bool** | When &#x60;true&#x60;, indicates that the direct debit information stored on the client&#39;s account is to be used to pay for the contract.&lt;br /&gt;  This is only required if both &#x60;CreditCardInfo&#x60; and &#x60;StoredCardInfo&#x60; are not passed.&lt;br /&gt;  Default: **false** | [optional] 
**ConsumerPresent** | **bool** | When &#x60;true&#x60;, indicates that the consumer is present or otherwise able to successfully negotiate an SCA challenge. It is not a good idea to have this always be false as that could very likely lead to a bank declining all transactions for the merchant.  Defaults to **false**. | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | The URL consumer is redirected to if the bank requests SCA. This field is only needed if ConsumerPresent is true. | [optional] 
**ProrateDate** | [**\DateTime**](\DateTime.md) | Optional, date to prorate contract | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


