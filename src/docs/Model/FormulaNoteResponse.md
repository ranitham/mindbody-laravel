# FormulaNoteResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int** | The formula note ID. | [optional] 
**ClientId** | **string** | The unique Id of the client for the formula note. This is the unique ID for the client in the site where the formula note originated. This is different than the ClientId specified in the request, which is the id for the client assigned by the business. | [optional] 
**AppointmentId** | **int** | The appointment ID that the formula note is related to. | [optional] 
**EntryDate** | [**\DateTime**](\DateTime.md) | The date formula note was created. | [optional] 
**Note** | **string** | The new formula note text. | [optional] 
**SiteId** | **int** | The site Id. | [optional] 
**SiteName** | **string** | The site name. | [optional] 
**StaffFirstName** | **string** | The first name of the staff for the optional associated appointment. If no appointment ID is provided, this will be null. | [optional] 
**StaffLastName** | **string** | The last name of the staff for the optional associated appointment. If no appointment ID is provided, this will be null. | [optional] 
**StaffDisplayName** | **string** | The display name of the staff for the optional associated appointment. If no appointment ID is provided, or no display name is specified for the staff member, this will be null. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


