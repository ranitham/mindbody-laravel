# PromoCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**PromotionID** | **int** | ID of the promo code | [optional] 
**Name** | **string** | Name of the promo code | [optional] 
**Code** | **string** | The code of the promocode. | [optional] 
**Active** | **bool** | Indicates that promocode is active. | [optional] 
**Discount** | [**\Nlocascio\Mindbody\Model\Discount**](Discount.md) | Contains information about the discount. | [optional] 
**ActivationDate** | [**\DateTime**](\DateTime.md) | The promocode activation date. | [optional] 
**ExpirationDate** | [**\DateTime**](\DateTime.md) | The promocode expiration date. | [optional] 
**MaxUses** | **int** | The maximun number of uses. | [optional] 
**NumberOfAutopays** | **int** | Number of Autopays | [optional] 
**DaysAfterCloseDate** | **int** | The number of days a client has to use a promocode after they are no longer a prospect. | [optional] 
**AllowOnline** | **bool** | Indicates if promocode to be redeemed online in consumer mode. | [optional] 
**LastModifiedDateTime** | [**\DateTime**](\DateTime.md) | Promo code last modified date and time | [optional] 
**DaysValid** | **string[]** | What days the promo code can be used | [optional] 
**ApplicableItems** | [**\Nlocascio\Mindbody\Model\ApplicableItem[]**](ApplicableItem.md) | Contains information about a promocode applicable items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


