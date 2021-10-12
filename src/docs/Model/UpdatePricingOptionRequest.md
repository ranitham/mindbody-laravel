# UpdatePricingOptionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ProductId** | **double** | The id of the pricing option (legacy Id in mongo db) | 
**Name** | **string** | Pricing option name. | [optional] 
**Price** | **double** | Price of this Pricing option. | [optional] 
**OnlinePrice** | **double** | Online price of this Pricing option. | [optional] 
**Count** | **int** | Number of sessions for this pricing option | [optional] 
**SellOnline** | **bool** | Whether this pricing option sell online or not | [optional] 
**RevenueCategory** | **string** | Revenue Category of this pricing option | [optional] 
**Discontinued** | **bool** | Whether this pricing option active or inactive | [optional] 
**MembershipId** | **int** | The ID of the membership required to purchase the pricing option  Default is -1 and will not update Membership if it is not passed in body | [optional] 
**IsThirdPartyDiscountPricing** | **bool** | Is this pricing option sold at discounted rates by third-parties  Once set to true it cannot be changed | [optional] 
**Priority** | **string** | The priority of the pricing option  Priority can be set to Low(-1), Medium (0), High(1) | [optional] 
**SellAtLocationIds** | **int[]** | The location IDs where this pricing option is sold   (default is null and will not update SellAtLocation if it is not passed in body) | [optional] 
**UseAtLocationIds** | **int[]** | The location IDs where this pricing option is used  (default is null and will not update UseAtLocation if it is not passed in body) | [optional] 
**ExpirationUnit** | **string** | The Expiration unit, either Days or Months | [optional] 
**ExpirationLength** | **int** | The number of days or months that the pricing option is active for. | [optional] 
**ExpirationType** | **string** | The date the pricing option begins its activation,   either the SaleDate or DateOfClientFirstVisit | [optional] 
**RestrictedMembershipIds** | **int[]** | This pricing option can be used under these memberships only  If null/empty then not restricted to any membership | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


