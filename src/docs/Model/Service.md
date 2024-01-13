# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Price** | **double** | The cost of the pricing option when sold at a physical location. | [optional] 
**OnlinePrice** | **double** | The cost of the pricing option when sold online. | [optional] 
**TaxIncluded** | **double** | The amount of tax included in the price, if inclusive pricing is enabled. | [optional] 
**ProgramId** | **int** | The ID of the program that this pricing option applies to. | [optional] 
**TaxRate** | **double** | The tax rate applied to the pricing option. This field is populated only when you include a &#x60;LocationID&#x60; in the request. | [optional] 
**ProductId** | **int** | The unique ID of this pricing option. This is the &#x60;PurchasedItems[].Id&#x60; returned from GET Sales. | [optional] 
**Id** | **string** | The barcode ID of the pricing option. This is the &#x60;PurchasedItems[].BarcodeId&#x60; returned from GET Sales. | [optional] 
**Name** | **string** | The name of the pricing option. | [optional] 
**Count** | **int** | The initial count of usages available for the pricing option. | [optional] 
**SellOnline** | **bool** | When true, filters to the pricing options that can be sold online.  Default: *false* | [optional] 
**SaleInContractOnly** | **bool** | When &#x60;true&#x60;, indicates that the pricing option is allowed to be purchased in a contract or package.  When &#x60;false&#x60;, indicates that the pricing option is not allowed to be purchased in a contract or package. | [optional] 
**Type** | **string** | The type of the pricing option, either Drop-in, Series, or Unlimited. | [optional] 
**ExpirationType** | **string** | The date the pricing option begins its activation, either the date of sale or the date the client first used it for a visit. | [optional] 
**ExpirationUnit** | **string** | The unit, either days or months, of &#x60;ExpirationLength&#x60;, indicating how long the pricing option is active for. | [optional] 
**ExpirationLength** | **int** | The number of days or months that the pricing option is active for. | [optional] 
**RevenueCategory** | **string** | The revenue category of the pricing option. | [optional] 
**MembershipId** | **int** | The ID that this pricing option grants membership to. | [optional] 
**SellAtLocationIds** | **int[]** | The location IDs where this pricing option is sold. | [optional] 
**UseAtLocationIds** | **int[]** | The location IDs where this pricing option may be used. | [optional] 
**Priority** | **string** | The priority of the pricing option, either High, Medium, or Low. | [optional] 
**IsIntroOffer** | **bool** | Indicates if this pricing option is an introductory offer. | [optional] 
**IntroOfferType** | **string** | When &#x60;IsIntroOffer&#x60; is true, this indicates if this introductory offer may be purchased by new clients or new and existing clients. | [optional] 
**IsThirdPartyDiscountPricing** | **bool** | Indicates whether this pricing option is sold at discounted rates by third-party services, such as ClassPass. | [optional] 
**Program** | **string** | The name of the service category the pricing option belongs to. | [optional] 
**Discontinued** | **bool** | If the pricing option has been marked discontinued. | [optional] 
**RestrictToMembershipIds** | **int[]** | Restricted to members of these membership ids. | [optional] 
**ApplyMemberDiscountsOfMembershipIds** | **int[]** | Discounts applied of these membership ids. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


