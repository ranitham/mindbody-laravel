# PurchasedItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SaleDetailId** | **int** | The ID which gets assigned to the item when item is added to the cart. | [optional] 
**Id** | **int** | The ID of the purchased item. Use this ID when calling the GET Services or GET Products endpoint. | [optional] 
**IsService** | **bool** | When &#x60;true&#x60;, indicates that the purchased item was a pricing option for a service. | [optional] 
**BarcodeId** | **string** | The barcode number of the purchased item. Use this ID when calling the GET Products endpoint. | [optional] 
**Description** | **string** | The description of the sale transaction/pricing option. | [optional] 
**ContractId** | **int** | The contract purchased by the client. Use this ID when calling the GET Contract endpoint. | [optional] 
**CategoryId** | **int** | The revenue category ID used for sale. Use this ID when calling the GET Categories endpoint. | [optional] 
**SubCategoryId** | **int** | The ID of revenue subcategory. | [optional] 
**UnitPrice** | **double** | er Unit Price of the item purchased. | [optional] 
**Quantity** | **int** | Quantity of the purchased item, applicable for products only. Note: Negative numbers indicate returned items. | [optional] 
**DiscountPercent** | **double** | The percent discount that was applied to the items subtotal. | [optional] 
**DiscountAmount** | **double** | The total discount amount that was applied to the items subtotal. | [optional] 
**Tax1** | **double** | A decimal representation of the first tax rate that was applied to the items subtotal. | [optional] 
**Tax2** | **double** | A decimal representation of the second tax rate that was applied to the items subtotal. | [optional] 
**Tax3** | **double** | A decimal representation of the third tax rate that was applied to the items subtotal. | [optional] 
**Tax4** | **double** | A decimal representation of the fourth tax rate that was applied to the items subtotal. | [optional] 
**Tax5** | **double** | A decimal representation of the fifth tax rate that was applied to the items subtotal. | [optional] 
**TaxAmount** | **double** | Total tax amount that is summation of tax1, tax2, tax3, tax4 and tax5. | [optional] 
**TotalAmount** | **double** | The items total, once discounts and/or tax was applied. | [optional] 
**Notes** | **string** | Note made by the customer while purchasing item. | [optional] 
**Returned** | **bool** | When &#x60;true&#x60;, indicates that the purchased item is returned, &#x60;false&#x60; otherwise. | [optional] 
**PaymentRefId** | **int** | The payment reference ID generated during payment of sold item. | [optional] 
**ExpDate** | [**\DateTime**](\DateTime.md) | The expiration date of the pricing option purchased. | [optional] 
**ActiveDate** | [**\DateTime**](\DateTime.md) | The activation date of pricing option purchased. | [optional] 
**GiftCardBarcodeId** | **string** | Gift Card BarcodeId | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


