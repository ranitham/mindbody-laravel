# Visit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AppointmentId** | **int** | The appointment’s ID. | [optional] 
**AppointmentGenderPreference** | **string** | The gender of staff member with whom the client prefers to book appointments.     Possible values are:  * Female - Indicates that the client prefers to book appointments with female staff members.  * Male - Indicates that the client prefers to book appointments with male staff members.  * None - Indicates that the client does not have a staff member gender preference. | [optional] 
**AppointmentStatus** | **string** | The status of the appointment. | [optional] 
**ClassId** | **int** | The class ID that was used to retrieve the visits. | [optional] 
**ClientId** | **string** | The ID of the client associated with the visit. | [optional] 
**ClientPhotoUrl** | **string** | PhotoUrl for the client | [optional] 
**ClientUniqueId** | **int** | The unique ID of the client associated with the visit. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The time this class is scheduled to start. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The date and time the visit ends. The Public API returns UTC dates and times. For example, a class that occurs on June 25th, 2018 at 2:15PM (EST) appears as “2018-06-25T19:15:00Z” because EST is five hours behind UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ. | [optional] 
**Id** | **int** | The ID of the visit. | [optional] 
**LastModifiedDateTime** | [**\DateTime**](\DateTime.md) | When included in the request, only records modified on or after the specified &#x60;LastModifiedDate&#x60; are included in the response. The Public API returns UTC dates and times. For example, a class that occurs on June 25th, 2018 at 2:15PM (EST) appears as “2018-06-25T19:15:00Z” because EST is five hours behind UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ. | [optional] 
**LateCancelled** | **bool** | When &#x60;true&#x60;, indicates that the class has been &#x60;LateCancelled&#x60;.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class has not been &#x60;LateCancelled&#x60;. | [optional] 
**SiteId** | **int** | The ID of the business where the visit is booked. | [optional] 
**LocationId** | **int** | The ID of the location where the visit took place or is to take place. | [optional] 
**MakeUp** | **bool** | When &#x60;true&#x60;, the client can make up this session and a session is not deducted from the pricing option that was used to sign the client into the enrollment. When the client has the make-up session, a session is automatically removed from a pricing option that matches the service category of the enrollment and is within the same date range of the missed session.&lt;br /&gt;  When &#x60;false&#x60;, the client cannot make up this session. See [Enrollments: Make-ups](https://support.mindbodyonline.com/s/article/203259433-Enrollments-Make-ups?language&#x3D;en_US) for more information. | [optional] 
**Name** | **string** | The name of the class. | [optional] 
**ServiceId** | **int** | The unique ID assigned to this pricing option when it was purchased by the client. | [optional] 
**ServiceName** | **string** | The name of the pricing option at the site where it was purchased. | [optional] 
**Service** | [**\Nlocascio\Mindbody\Model\ClientService**](ClientService.md) | The details of the pricing option at the site where it was purchased. | [optional] 
**ProductId** | **int** | The ID of the pricing option at the site where it was purchased. | [optional] 
**SignedIn** | **bool** | When &#x60;true&#x60;, indicates that the client has been signed in.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client has not been signed in. | [optional] 
**StaffId** | **int** | The ID of the staff member who is teaching the class. | [optional] 
**WebSignup** | **bool** | When &#x60;true&#x60;, indicates that the client signed up online.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client was signed up by a staff member. | [optional] 
**Action** | **string** | The action taken. | [optional] 
**Missed** | **bool** | When &#x60;true&#x60;, indicates that the class has been &#x60;Missed&#x60;.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class has not been &#x60;Missed&#x60;. | [optional] 
**VisitType** | **int** | Indicates the Id of visit type. | [optional] 
**TypeGroup** | **int** | Indicates the Id of type group. | [optional] 
**TypeTaken** | **string** | Indicates the service type taken. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


