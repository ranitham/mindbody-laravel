# GetProductsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ProductIds** | **string[]** | The barcode number of the product to be filter by. | [optional] 
**SearchText** | **string** | A search filter, used for searching by term. | [optional] 
**CategoryIds** | **int[]** | A list of revenue category IDs to filter by. Use this ID when calling the GET Categories endpoint.     ** Note:** The values for these are not currently retrievable through the API. | [optional] 
**SubCategoryIds** | **int[]** | A list of subcategory IDs to filter by. Use this ID when calling the GET Categories endpoint.    **Note:** The values for these are not currently retrievable through the API. | [optional] 
**SellOnline** | **bool** | When &#x60;true&#x60;, only products that can be sold online are returned.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional] 
**LocationId** | **int** | The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


