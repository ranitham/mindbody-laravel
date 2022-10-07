# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int** | The contract’s ID at the subscriber’s business. | [optional] 
**Name** | **string** | The name of the contract. | [optional] 
**Description** | **string** | A description of the contract. | [optional] 
**AssignsMembershipId** | **int** | The ID of the membership that was assigned to the client when the client signed up for a contract. | [optional] 
**AssignsMembershipName** | **string** | The name of the membership that was assigned to the client when the client signed up for this contract. | [optional] 
**SoldOnline** | **bool** | When &#x60;true&#x60;, indicates that this membership is intended to be shown to clients in client experiences.&lt;br /&gt;  When &#x60;false&#x60;, this contract should only be shown to staff members. | [optional] 
**ContractItems** | [**\Nlocascio\Mindbody\Model\ContractItem[]**](ContractItem.md) | Contains information about the items in the contract. | [optional] 
**IntroOffer** | **string** | Defines whether this contract is treated as an introductory offer. If this is an introductory offer, then clients are always charged a set number of times rather than month to month, using their AutoPays. Possible values are:  * None  * NewConsumer  * NewAndReturningConsumer | [optional] 
**AutopaySchedule** | [**\Nlocascio\Mindbody\Model\AutopaySchedule**](AutopaySchedule.md) | Contains information about the AutoPay schedule. This parameter is null if &#x60;AutopayTriggerType&#x60; has a value of &#x60;PricingOptionRunsOutOrExpires&#x60;. | [optional] 
**NumberOfAutopays** | **int** | The number of times that the AutoPay is to be run. This value is null if &#x60;FrequencyType&#x60; is &#x60;MonthToMonth&#x60;. | [optional] 
**AutopayTriggerType** | **string** | Defines whether the AutoPay, if applicable to this contract, runs on a set schedule or when the pricing option runs out or expires. Possible values are:  * OnSetSchedule  * PricingOptionRunsOutOrExpires | [optional] 
**ActionUponCompletionOfAutopays** | **string** | The renewal action to be taken when this AutoPay is completed. Possible values are:  * ContractExpires  * ContractAutomaticallyRenews | [optional] 
**ClientsChargedOn** | **string** | The value that indicates when clients are charged. Possible values are:  * OnSaleDate  * FirstOfTheMonth  * FifteenthOfTheMonth  * LastDayOfTheMonth  * FirstOrFifteenthOfTheMonth  * FirstOrSixteenthOfTheMonth  * FifteenthOrEndOfTheMonth  * SpecificDate | [optional] 
**ClientsChargedOnSpecificDate** | [**\DateTime**](\DateTime.md) | If &#x60;ClientsChargedOn&#x60; is defined as a specific date, this property holds the value of that date. Otherwise, this property is null. | [optional] 
**DiscountAmount** | **double** | The calculated discount applied to the items in this contract. | [optional] 
**DepositAmount** | **double** | The amount of the deposit required for this contract. | [optional] 
**FirstAutopayFree** | **bool** | When &#x60;true&#x60;, indicates that the first payment for the AutoPay is free. | [optional] 
**LastAutopayFree** | **bool** | When &#x60;true&#x60;, indicates that the last payment for the AutoPay is free. | [optional] 
**ClientTerminateOnline** | **bool** | When &#x60;true&#x60;, indicates that the client can terminate this contract on the Internet. | [optional] 
**MembershipTypeRestrictions** | [**\Nlocascio\Mindbody\Model\MembershipTypeRestriction[]**](MembershipTypeRestriction.md) | Contains information about the memberships that can purchase this contract. If null, then no membership restrictions exist, and anyone can purchase the contract. | [optional] 
**LocationPurchaseRestrictionIds** | **int[]** | The IDs of the locations where this contract may be sold. If there are no restrictions, this value is null. | [optional] 
**LocationPurchaseRestrictionNames** | **string[]** | Location names where the contract may be purchased. If this value is null, there are no restrictions. | [optional] 
**AgreementTerms** | **string** | Business-defined terms and conditions for the contract. | [optional] 
**RequiresElectronicConfirmation** | **bool** | When &#x60;true&#x60;, clients who purchase the contract are prompted to agree to the terms of the contract the next time that they log in. | [optional] 
**AutopayEnabled** | **bool** | When &#x60;true&#x60;, this contract establishes an AutoPay on the client’s account. | [optional] 
**FirstPaymentAmountSubtotal** | **double** | The subtotal of the amount that the client is to be charged when signing up for the contract. | [optional] 
**FirstPaymentAmountTax** | **double** | The amount of tax that the client is to be charged when signing up for the contract. | [optional] 
**FirstPaymentAmountTotal** | **double** | The total amount that the client is to be charged when signing up for the contract. | [optional] 
**RecurringPaymentAmountSubtotal** | **double** | The subtotal amount that the client is to be charged on an ongoing basis. | [optional] 
**RecurringPaymentAmountTax** | **double** | The amount of tax the client is to be charged on an ongoing basis. | [optional] 
**RecurringPaymentAmountTotal** | **double** | The total amount that the client is to be charged on an ongoing basis. | [optional] 
**TotalContractAmountSubtotal** | **double** | The subtotal amount that the client is to be charged over the lifespan of the contract. | [optional] 
**TotalContractAmountTax** | **double** | The total amount of tax the client is to be charged over the lifespan of the contract. | [optional] 
**TotalContractAmountTotal** | **double** | The total amount the client is to be charged over the lifespan of the contract. | [optional] 
**PromoPaymentAmountSubtotal** | **double** | Subtotal promotional period | [optional] 
**PromoPaymentAmountTax** | **double** | Taxes of promotional period | [optional] 
**PromoPaymentAmountTotal** | **double** | Total of promotional period | [optional] 
**NumberOfPromoAutopays** | **int** | Number of times that the AutoPay runs under the promotional period | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


