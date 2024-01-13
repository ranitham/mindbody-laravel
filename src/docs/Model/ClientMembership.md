# ClientMembership

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**RestrictedLocations** | [**\Nlocascio\Mindbody\Model\Location[]**](Location.md) | The locations that the membership is restricted to, if any.  Please note that client memberships with location restrictions can only be used to pay for scheduled services at the site to which they belong. Memberships with location restrictions can not be used to pay for scheduled services at other sites within an organization. | [optional] 
**IconCode** | **string** | Text code that represents the &#x60;MembershipIcon&#x60;. | [optional] 
**MembershipId** | **int** | The membership&#39;s ID. | [optional] 
**ActiveDate** | [**\DateTime**](\DateTime.md) | The date that this pricing option became active and could be used to pay for services. | [optional] 
**Count** | **int** | The number of service sessions this pricing option contained when first purchased. | [optional] 
**Current** | **bool** | When &#x60;true&#x60;, there are service sessions remaining on the pricing option that can be used pay for the current session.&lt;br /&gt;  When &#x60;false&#x60;, the client cannot use this pricing option to pay for other services. | [optional] 
**ExpirationDate** | [**\DateTime**](\DateTime.md) | The date when the pricing option expires and can no longer be used to pay for services, even if unused service sessions remain on the option; expressed as UTC. | [optional] 
**Id** | **int** | The unique ID assigned to this pricing option, specific to when it was purchased by the client. | [optional] 
**ProductId** | **int** | The unique ID of this pricing option, not specific to any client&#39;s purchase of it. | [optional] 
**Name** | **string** | The name of this pricing option. | [optional] 
**PaymentDate** | [**\DateTime**](\DateTime.md) | The date on which the client paid for this pricing option. | [optional] 
**Program** | [**\Nlocascio\Mindbody\Model\Program**](Program.md) | Contains information about the service category this service falls under. | [optional] 
**Remaining** | **int** | The number of service sessions remaining in the pricing option that can still be used. | [optional] 
**SiteId** | **int** | The ID of the subscriber site associated with this pricing option. | [optional] 
**Action** | **string** | The action taken. | [optional] 
**ClientID** | **string** | The Client ID assigned to this pricing option, specific to when it was purchased by the client. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


