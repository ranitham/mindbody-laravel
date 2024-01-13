# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ProductId** | **int** | The unique ID associated with product. | [optional] 
**Id** | **string** | The barcode number of the product. This is the &#x60;PurchasedItems[].BarcodeId&#x60; returned from GET Sales. | [optional] 
**CategoryId** | **int** | The revenue category ID of the product. Use this ID when calling the GET Categories endpoint. | [optional] 
**SubCategoryId** | **int** | The SubCategory ID of the product. Use this ID when calling the GET Categories endpoint. | [optional] 
**Price** | **double** | The price of the product. | [optional] 
**TaxIncluded** | **double** | If tax inclusive-pricing is enabled, this field shows how much tax was added to the price. To fetch this value &#x60;LocationId&#x60; must be passed as a query parameter. | [optional] 
**TaxRate** | **double** | The tax rate that was applied to this purchase. To fetch this value &#x60;LocationId&#x60; must be passed as a query parameter. | [optional] 
**GroupId** | **int** | The unique ID of the product group. | [optional] 
**Name** | **string** | The name of the product. | [optional] 
**OnlinePrice** | **double** | The online price of the product. | [optional] 
**ShortDescription** | **string** | A short text description of the product. | [optional] 
**LongDescription** | **string** | A long, more detailed text description of the product. | [optional] 
**TypeGroup** | **int** | The Type group of the product. | [optional] 
**SupplierId** | **int** | The unique ID of the supplier of product. | [optional] 
**SupplierName** | **string** | The Supplier Name of the product. | [optional] 
**ImageURL** | **string** | The URL of the image associated with this product. | [optional] 
**Color** | [**\Nlocascio\Mindbody\Model\Color**](Color.md) | Contains information about color of the product. | [optional] 
**Size** | [**\Nlocascio\Mindbody\Model\Size**](Size.md) | Contains information about the size of the product. | [optional] 
**ManufacturerId** | **string** | The ID number attributed to the product by the manufacturer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


