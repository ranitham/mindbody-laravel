# CheckoutPaymentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Type** | **string** | The type of payment. Possible values are:  * CreditCard - Indicates that this payment item is a credit card.  * StoredCard - Indicates that this payment item is a credit card stored on the client’s account.  * DirectDebit - Indicates that this payment item is a direct debit.  * EncryptedTrackData - Indicates that this payment item is a swiped credit card.  * TrackData - Indicates that this payment item is a swiped credit card.  * DebitAccount - Indicates that funds should be debited from the client’s account.  * Custom - Indicates that this payment item is a custom payment method configured by the business.  * Comp - Indicates that this payment item is making all or part of the cart’s total complementary.  * Cash - Indicates that this payment item is cash.  * Check - Indicates that this payment item is a check.  * GiftCard - Indicates that this payment item is a gift card. | [optional] 
**Metadata** | **object** | Contains information about the cart’s payments. Possible values vary according to the Type property, as below:  * CreditCard Keys - amount, creditCardNumber, expMonth, expYear, cvv, billingName, billingAddress, billingCity, billingState, billingPostalCode, saveInfo, cardId  * StoredCard Keys - amount, lastFour  * DirectDebit Keys - amount  * EncryptedTrackData Keys - amount, trackData  * TrackData Keys - amount, trackData  * DebitAccount Keys - amount  * Custom Keys - amount, id  * Comp Keys - amount  * Cash Keys - amount, notes  * Check Keys - amount, notes  * GiftCard - amount, notes, cardNumber | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


