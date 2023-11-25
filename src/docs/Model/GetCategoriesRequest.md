# GetCategoriesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**CategoryIds** | **int[]** | When included, the response only contains details about the specified category Ids. | [optional] 
**SubCategoryIds** | **int[]** | When included, the response only contains details about the specified subcategory Ids. | [optional] 
**Service** | **bool** | When &#x60;true&#x60;, the response only contains details about Revenue Categories.  When &#x60;false&#x60;, only Product Revenue Categories are returned.  Default: **All Categories** | [optional] 
**Active** | **bool** | When &#x60;true&#x60;, the response only contains categories which are activated.   When &#x60;false&#x60;, only deactivated categories are returned.  Default: **All Categories** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


