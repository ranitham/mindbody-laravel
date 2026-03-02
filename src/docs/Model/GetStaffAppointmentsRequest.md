# GetStaffAppointmentsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AppointmentIds** | **int[]** | A list of the requested appointment IDs. | [optional] 
**LocationIds** | **int[]** | A list of the requested location IDs. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date of the requested date range. If omitted, the default is used.   &lt;br /&gt;Default: **today&#39;s date** | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional] 
**StaffIds** | **int[]** | List of staff IDs to be returned. Omit parameter to return staff appointments for all staff. | [optional] 
**ClientId** | **string** | The client ID to be returned. | [optional] 
**UseSiteSettingsStaffName** | **bool** | When &#x60;true&#x60;, the staff DisplayName will be populated based on site-level settings.  When &#x60;false&#x60; or omitted, the staff DisplayName will contain only the FirstName. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


