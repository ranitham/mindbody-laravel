# Staff

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Address** | **string** | The address of the staff member who is teaching the class. | [optional] 
**AppointmentInstructor** | **bool** | When &#x60;true&#x60;, indicates that the staff member offers appointments.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the staff member does not offer appointments. | [optional] 
**AlwaysAllowDoubleBooking** | **bool** | When &#x60;true&#x60;, indicates that the staff member can be scheduled for overlapping services.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the staff can only be scheduled for one service at a time in any given time-frame. | [optional] 
**Bio** | **string** | The staff member’s biography. This string contains HTML. | [optional] 
**City** | **string** | The staff member’s city. | [optional] 
**Country** | **string** | The staff member’s country. | [optional] 
**Email** | **string** | The staff member’s email address. | [optional] 
**FirstName** | **string** | The staff member’s first name. | [optional] 
**HomePhone** | **string** | The staff member’s home phone number. | [optional] 
**Id** | **int** | The ID assigned to the staff member. | [optional] 
**IndependentContractor** | **bool** | When &#x60;true&#x60;, indicates that the staff member is an independent contractor.  When &#x60;false&#x60;, indicates that the staff member is not an independent contractor. | [optional] 
**IsMale** | **bool** | When &#x60;true&#x60;, indicates that the staff member is male.  When &#x60;false&#x60;, indicates that the staff member is female. | [optional] 
**LastName** | **string** | The staff member’s last name. | [optional] 
**MobilePhone** | **string** | The staff member’s mobile phone number. | [optional] 
**Name** | **string** | The staff member’s name. | [optional] 
**PostalCode** | **string** | The staff member’s postal code. | [optional] 
**ClassTeacher** | **bool** | When &#x60;true&#x60;, indicates that the staff member can teach classes.  When &#x60;false&#x60;, indicates that the staff member cannot teach classes. | [optional] 
**SortOrder** | **int** | If configured by the business owner, this field determines a staff member’s weight when sorting. Use this field to sort staff members on your interface. | [optional] 
**State** | **string** | The staff member’s state. | [optional] 
**WorkPhone** | **string** | The staff member’s work phone number. | [optional] 
**ImageUrl** | **string** | The URL of the staff member’s image, if one has been uploaded. | [optional] 
**ClassAssistant** | **bool** | Is the staff an assistant | [optional] 
**ClassAssistant2** | **bool** | Is the staff an assistant2 | [optional] 
**EmploymentStart** | [**\DateTime**](\DateTime.md) | The start date of employment | [optional] 
**EmploymentEnd** | [**\DateTime**](\DateTime.md) | The end date of employment | [optional] 
**ProviderIDs** | **string[]** | A list of ProviderIds for the staff. | [optional] 
**Rep** | **bool** | return true if staff is sales Rep 1 else false. | [optional] 
**Rep2** | **bool** | return true if staff is sales Rep 2 else false. | [optional] 
**Rep3** | **bool** | return true if staff is sales Rep 3 else false. | [optional] 
**Rep4** | **bool** | return true if staff is sales Rep 4 else false. | [optional] 
**Rep5** | **bool** | return true if staff is sales Rep 5 else false. | [optional] 
**Rep6** | **bool** | return true if staff is sales Rep 6 else false. | [optional] 
**Appointments** | [**\Nlocascio\Mindbody\Model\Appointment[]**](Appointment.md) | A list of appointments for the staff. | [optional] 
**Unavailabilities** | [**\Nlocascio\Mindbody\Model\Unavailability[]**](Unavailability.md) | A list of unavailabilities for the staff. | [optional] 
**Availabilities** | [**\Nlocascio\Mindbody\Model\Availability[]**](Availability.md) | A list of availabilities for the staff. | [optional] 
**EmpID** | **string** | The EmpID assigned to the staff member. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


