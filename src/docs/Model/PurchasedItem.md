# PurchasedItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SaleDetailId** | **int** | The ID of the sale detail | [optional] 
**Id** | **int** | The ProductID of the item. | [optional] 
**IsService** | **bool** | When &#x60;true&#x60;, indicates that the purchased item was a pricing option for a service. | [optional] 
**BarcodeId** | **string** | The BarcodeId of the item.  For services, BarcodeId may be null  If no barcode id is explicitly set by the business it is the internal id in a string format. | [optional] 
**Description** | **string** | Description of the sale transaction/pricing option description | [optional] 
**ContractId** | **int** | Contract ID purchased by the client | [optional] 
**CategoryId** | **int** | Revenue Category ID | [optional] 
**SubCategoryId** | **int** | Revenue Subcategory ID | [optional] 
**UnitPrice** | **double** | Per unit price of the item sold | [optional] 
**Quantity** | **int** | Quantity of the products | [optional] 
**DiscountPercent** | **double** | Discount % applied during sale | [optional] 
**DiscountAmount** | **double** | Discount Amount | [optional] 
**Tax1** | **double** | Tax1 applicable for the product | [optional] 
**Tax2** | **double** | Tax2 applicable for the product | [optional] 
**Tax3** | **double** | Tax3 applicable for the product | [optional] 
**Tax4** | **double** | Tax4 applicable for the product | [optional] 
**Tax5** | **double** | Tax5 applicable for the product | [optional] 
**TaxAmount** | **double** | Tax rate applicable for the product | [optional] 
**TotalAmount** | **double** | Charged to the customer for paying | [optional] 
**Notes** | **string** | Notes | [optional] 
**Returned** | **bool** | Returned or not | [optional] 
**PaymentRefId** | **int** | Payment Reference ID | [optional] 
**ExpDate** | [**\DateTime**](\DateTime.md) | Expiration date of the pricing option purchased | [optional] 
**ActiveDate** | [**\DateTime**](\DateTime.md) | Activation date of pricing option purchased | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


