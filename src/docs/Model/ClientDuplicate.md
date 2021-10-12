# ClientDuplicate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **string** | The client’s ID, as configured by the business owner. This is the client’s barcode ID if the business owner assigns barcodes to clients. This ID is used throughout the Public API for client-related Public API calls. When used in a POST &#x60;UpdateClient&#x60; request, the &#x60;Id&#x60; is used to identify the client for the update. | [optional] 
**UniqueId** | **int** | The client’s system-generated ID at the business. This value cannot be changed by business owners and is always unique across all clients at the business. This ID is not widely used in the Public API, but can be used by your application to uniquely identify clients. | [optional] 
**FirstName** | **string** | The client’s first name. | [optional] 
**LastName** | **string** | The client’s last name. | [optional] 
**Email** | **string** | The client’s email address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


