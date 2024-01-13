# UpdateClientRewardsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client that is getting rewards earned or redeemed. | 
**Points** | **int** | The amount of points the client is getting earned or redeemed, must be a positive number. | 
**Source** | **string** | If Action passed as **Earned**,    possible values are:  * Appointment Booking  * Class Booking  * Referral  * Sale    &lt;br /&gt;Omit if Action passed as **Redeemed**. | [optional] 
**SourceId** | **int** | The unique identifier in the MINDBODY system for the **Source**. If Action is **Earned**, and an optional SourceID is provided, it is validated as follows:     * If Source is Appointment Booking, then a provided SourceID must be a valid Visit.AppointmentId for the indicated Client.  * If Source is **Class Booking**, then a provided SourceID must be a valid Visit.Id for the indicated client.  * If Source is **Sale**, then a provided SourceID must be a valid Sale.Id for the indicated client.   * If Source is **Referral**, then a provided SourceID must be a valid Client.Id (RelatedClientId) and have been referred by the indicated client (ClientRelationship.Id &#x3D; -1).  If Action is **Redeemed**, and an optional SourceID is provided, then SourceID must be a valid Sale.Id for the indicated client, and refers to the sale where the indicated points were redeemed. | [optional] 
**Action** | **string** | Indicates if rewards are getting earned or redeemed.     Possible values are:  *Earned  *Redeemed | 
**ActionDateTime** | [**\DateTime**](\DateTime.md) | The date and time when the points were earned or redeemed in UTC format. This date may be in the past, however it may not be in the future.  Default: **current date/time** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


