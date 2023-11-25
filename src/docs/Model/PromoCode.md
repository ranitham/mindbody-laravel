# PromoCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Name** | **string** | Name of the promo code | [optional] 
**Code** | **string** | Code to be used at purchase for discount | [optional] 
**Active** | **bool** | Active status | [optional] 
**Discount** | [**\Nlocascio\Mindbody\Model\Discount**](Discount.md) | Discount info | [optional] 
**ActivationDate** | [**\DateTime**](\DateTime.md) | Date activated | [optional] 
**ExpirationDate** | [**\DateTime**](\DateTime.md) | Date expired | [optional] 
**MaxUses** | **int** | How many times it can be used | [optional] 
**NumberOfAutopays** | **int** | Number of Autopays | [optional] 
**DaysAfterCloseDate** | **int** | Days after close date | [optional] 
**AllowOnline** | **bool** | Whether it can be used online | [optional] 
**DaysValid** | **string[]** | What days the promo code can be used | [optional] 
**ApplicableItems** | [**\Nlocascio\Mindbody\Model\ApplicableItem[]**](ApplicableItem.md) | Items that the promo code will have the discount for | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


