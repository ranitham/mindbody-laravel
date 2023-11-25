# AddStaffRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**FirstName** | **string** | The staff member first name. You must specify a first name when you add a staff member. | 
**LastName** | **string** | The staff member last name. You must specify a last name when you add a staff member. | 
**Email** | **string** | The staff member’s email address. | [optional] 
**IsMale** | **bool** | When &#x60;true&#x60;, indicates that the staff member is male.  When &#x60;false&#x60;, indicates that the staff member is female. | [optional] 
**HomePhone** | **string** | The staff member’s home phone number. | [optional] 
**WorkPhone** | **string** | The staff member’s work phone number. | [optional] 
**MobilePhone** | **string** | The staff member’s mobile phone number. | [optional] 
**Bio** | **string** | The staff member’s biography. This string contains HTML. | [optional] 
**Address** | **string** | The first line of the staff member street address. | [optional] 
**Address2** | **string** | The second line of the staff member street address, if needed. | [optional] 
**City** | **string** | The staff member’s city. | [optional] 
**State** | **string** | The staff member’s state. | [optional] 
**Country** | **string** | The staff member’s country. | [optional] 
**PostalCode** | **string** | The staff member’s postal code. | [optional] 
**ClassAssistant** | **bool** | Is the staff an assistant | [optional] 
**ClassAssistant2** | **bool** | Is the staff an assistant2 | [optional] 
**IndependentContractor** | **bool** | When &#x60;true&#x60;, indicates that the staff member is an independent contractor.  When &#x60;false&#x60;, indicates that the staff member is not an independent contractor. | [optional] 
**AppointmentInstructor** | **bool** | When &#x60;true&#x60;, indicates that the staff member offers appointments.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the staff member does not offer appointments. | [optional] 
**AlwaysAllowDoubleBooking** | **bool** | When &#x60;true&#x60;, indicates that the staff member can be scheduled for overlapping services.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the staff can only be scheduled for one service at a time in any given time-frame. | [optional] 
**ClassTeacher** | **bool** | When &#x60;true&#x60;, indicates that the staff member can teach classes.  When &#x60;false&#x60;, indicates that the staff member cannot teach classes. | [optional] 
**EmploymentStart** | [**\DateTime**](\DateTime.md) | The start date of employment | [optional] 
**EmploymentEnd** | [**\DateTime**](\DateTime.md) | The end date of employment | [optional] 
**SortOrder** | **int** | If configured by the business owner, this field determines a staff member’s weight when sorting. Use this field to sort staff members on your interface. | [optional] 
**ProviderIDs** | **string[]** | A list of providerIDs for the staff.  In the US it is one per staff and is numeric, otherwise it can be a list and is alpha-numeric  for more information see https://support.mindbodyonline.com/s/article/204075743-Provider-IDs?language&#x3D;en_US | [optional] 
**Notes** | **string** | The staff member private notes. | [optional] 
**EmpID** | **string** | The custom staff ID assigned to the staff member. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


