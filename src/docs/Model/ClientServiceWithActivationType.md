# ClientServiceWithActivationType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ActivationType** | **string** | Specifies how this pricing option is configured to activate.  This value reflects the activation behavior defined in the Core system when the pricing option was created.  Use this field to determine whether the ActiveDate represents the purchase date  or a future date pending the client&#39;s first visit.  Possible values:  - OnFirstVisit: The pricing option activates on the client&#39;s first visit (check-in) after purchase.    The ActiveDate is set to the date of that first visit.    Until the client checks in, the ActiveDate may be null or set to a future/placeholder date.  - OnPurchase: The pricing option activates immediately upon purchase.    The ActiveDate is set to the purchase date. | [optional] 
**CannotPayForClassesBeforeActivation** | **bool** | Indicates whether the site enforces activation date restrictions for booking.  This value reflects the site-level setting \&quot;EnforceActivationDates\&quot; (also known as \&quot;Check Activation Dates\&quot;)  for the subscriber identified by SiteId.  When integrating with booking workflows, use this field in conjunction with ActivationType  to determine if a pricing option can be applied for a booking:  - true: The site enforces activation dates. The client cannot use this pricing option to pay for    classes or appointments scheduled before the ActiveDate.  - false: The site allows booking before activation. The client can use this pricing option to pay for    classes or appointments scheduled before the ActiveDate.    This is commonly used with \&quot;Activate on First Visit\&quot; pricing options to allow immediate booking. | [optional] 
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
**Returned** | **bool** | Identification for purchased service is returned or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


