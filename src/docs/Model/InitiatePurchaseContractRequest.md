# InitiatePurchaseContractRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | When &#x60;true&#x60;, the Public API validates input information, but does not commit it, so no client data is affected.&lt;br /&gt;  When &#x60;false&#x60; or omitted, the transaction is committed, and client data is affected.&lt;br /&gt;  This endpoint DOES NOT support the &#x60;Test&#x60; parameter.&lt;br /&gt;  Default: **false** | [optional] 
**LocationId** | **int** | The ID of the location where the client is purchasing the contract; used for AutoPays. If no location ID is supplied, it defaults to the online store, represented by a null value.   Default: **null** (Online store location) | [optional] 
**ClientId** | **string** | The ID of the client. Note that this is not the same as the client’s unique ID. | 
**ContractId** | **int** | The ID of the contract being purchased. | 
**PromotionCode** | **string** | A promotion code, if one applies. Promotion codes are applied to items that are both marked as pay now in a contract and are discounted by the promotion code. If a pay now item is an autopay item, its autopay price is the price at the time of checkout, so, if a promotion code was applied, all autopays are scheduled using that discounted price. | [optional] 
**PromotionCodes** | **string[]** | Promotion codes, if they apply. Promotion codes are applied to items that are both marked as pay now in a contract and are discounted by the promotion code. If a pay now item is an autopay item, its autopay price is the price at the time of checkout, so, if a promotion code was applied, all autopays are scheduled using that discounted price. | [optional] 
**SendNotifications** | **bool** | When &#x60;true&#x60;, indicates that email and SMS notifications should be sent to the client after purchase.&lt;br /&gt;  Default: **true** | [optional] 
**SalesRepId** | **int** | The ID of the staff member to be marked as the sales rep for this contract sale. | [optional] 
**PaymentAuthenticationCallbackUrl** | **string** | The URL consumer is redirected to after the payment. | [optional] 
**PaymentMethodId** | **int** | The type of alternative payment. Possible values are:  * 997 - Indicates that the payment method is iDEAL | Wero.  * 801 - Indicates that the payment method is Apple Pay. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


