# GetPromoCodesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ActiveOnly** | **bool** | If true, filters results to show only promocodes that are active. If **false**, all promocodes are returned.  Default: **true** | [optional] 
**OnlineOnly** | **bool** | If &#x60;true&#x60;, filters results to show only promocodes that can be used for online sale.  If &#x60;false&#x60;, all promocodes are returned.  Default: **false** | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | Filters results to promocodes that were activated after this date. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | Filters results to promocodes that were activated before this date. | [optional] 
**LastModifiedDate** | [**\DateTime**](\DateTime.md) | Filters results to promocodes that were modified on or after this date. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


