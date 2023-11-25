# AddPromoCodeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Code** | **string** | The code of the promocode. | 
**Name** | **string** | The name of the promocode. | 
**Active** | **bool** | Indicates that promocode is active. Default: **true** | [optional] 
**Discount** | [**\Nlocascio\Mindbody\Model\Discount**](Discount.md) | Discount info | [optional] 
**ActivationDate** | [**\DateTime**](\DateTime.md) | The date of the promocode activation. Default: **today’s date** | [optional] 
**ExpirationDate** | [**\DateTime**](\DateTime.md) | The date of the promocode expiration. Default: **a months from today’s date** | [optional] 
**MaxUses** | **int** | The maximun number of uses. A use is considered a single sale. | [optional] 
**DaysAfterCloseDate** | **int** | The number of days a client has to use a promocode after they are no longer a prospect. | [optional] 
**AllowOnline** | **bool** | Indicates if promocode can be redeemed online in consumer mode. Default: **false** | [optional] 
**DaysValid** | **string[]** | Indicates what days of the week promocode is valid. Defaults to 7 days of the week. Possible values are:  * Monday  * Tuesday  * Wednesday  * Thursday  * Friday  * Saturday  * Sunday | [optional] 
**ApplicableItems** | [**\Nlocascio\Mindbody\Model\ApplicableItem[]**](ApplicableItem.md) | Contains information about appicable items.  See ApplicableItems for a details of the &#x60;ApplicableItems&#x60; object. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


