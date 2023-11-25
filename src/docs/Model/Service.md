# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Price** | **double** | The cost of the pricing option when sold at a physical location. | [optional] 
**OnlinePrice** | **double** | The cost of the pricing option when sold online. | [optional] 
**TaxIncluded** | **double** | The amount of tax included in the price, if inclusive pricing is enabled. | [optional] 
**ProgramId** | **int** | The ID of the program that this pricing option applies to. | [optional] 
**TaxRate** | **double** | The tax rate applied to the pricing option. This field is populated only when you include a &#x60;LocationID&#x60; in the request. | [optional] 
**ProductId** | **int** | The unique ID of the pricing option. | [optional] 
**Id** | **string** | The barcode ID of the pricing option. | [optional] 
**Name** | **string** | The name of the pricing option. | [optional] 
**Count** | **int** | The initial count of usages available for the pricing option. | [optional] 
**SellOnline** | **bool** | A flag for whether or not the pricing option is sold online. | [optional] 
**SaleInContractOnly** | **bool** | A flag for whether or not the pricing option is contractonly. | [optional] 
**Type** | **string** | Indicates if the pricing option is a drop-in, series, or unlimiited. | [optional] 
**ExpirationType** | **string** | Indicates if the pricing option begins its activation on the date of sale or first usage. | [optional] 
**ExpirationUnit** | **string** | The unit, either days or months, of ExpirationLength. | [optional] 
**ExpirationLength** | **int** | The lifetime of a pricing option. | [optional] 
**RevenueCategory** | **string** | The revenue category of the pricing option. | [optional] 
**MembershipId** | **int** | The ID that this pricing option grants membership to. | [optional] 
**SellAtLocationIds** | **int[]** | The location IDs where this pricing option is sold. | [optional] 
**UseAtLocationIds** | **int[]** | The location IDs where this pricing option may be used. | [optional] 
**Priority** | **string** | The priority of the pricing option. | [optional] 
**IsIntroOffer** | **bool** | A flag that indicates if this pricing option is an introductory offer. | [optional] 
**IntroOfferType** | **string** | Indicates if this pricing option may be purchased to new clients or all clients. | [optional] 
**IsThirdPartyDiscountPricing** | **bool** | A flag that indicates if this pricing option involves a third party discount | [optional] 
**Program** | **string** | The name of the program corresponding to ProgramId. | [optional] 
**Discontinued** | **bool** | Whether this pricing option has been discontinued or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


