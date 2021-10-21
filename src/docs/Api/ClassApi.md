# Nlocascio\Mindbody\ClassApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**classAddClientToClass**](ClassApi.md#classAddClientToClass) | **POST** /public/v6/class/addclienttoclass | Book a client into a class.
[**classGetClassDescriptions**](ClassApi.md#classGetClassDescriptions) | **GET** /public/v6/class/classdescriptions | Get class descriptions.
[**classGetClassSchedules**](ClassApi.md#classGetClassSchedules) | **GET** /public/v6/class/classschedules | Get class schedules.
[**classGetClassVisits**](ClassApi.md#classGetClassVisits) | **GET** /public/v6/class/classvisits | Get information about clients booked in a class.
[**classGetClasses**](ClassApi.md#classGetClasses) | **GET** /public/v6/class/classes | Get scheduled classes.
[**classGetWaitlistEntries**](ClassApi.md#classGetWaitlistEntries) | **GET** /public/v6/class/waitlistentries | Get waiting list entries.
[**classRemoveClientFromClass**](ClassApi.md#classRemoveClientFromClass) | **POST** /public/v6/class/removeclientfromclass | Remove a client from a class.
[**classRemoveFromWaitlist**](ClassApi.md#classRemoveFromWaitlist) | **POST** /public/v6/class/removefromwaitlist | Remove a client from a waiting list.
[**classSubstituteClassTeacher**](ClassApi.md#classSubstituteClassTeacher) | **POST** /public/v6/class/substituteclassteacher | Substitute a class teacher.


# **classAddClientToClass**
> \Nlocascio\Mindbody\Model\AddClientToClassResponse classAddClientToClass($Request)

Book a client into a class.

This endpoint adds a client to a class or to a class waiting list. It is helpful to use this endpoint in the following situations:  * Use after calling `GET Clients` and `GET Classes` so that you are sure which client to book in which class.  * If adding a client to a class from a waiting list, use this call after you call `GET WaitlistEntries` and determine the ID of the waiting list from which you are moving the client.  * If adding a client to a class and using a pricing option that the client has already purchased, use this call after you call `GET ClientServices` to determine the ID of the pricing option that the client wants to use.    If you add a client to a class and the client purchases a new pricing option, use `GET Services`, `GET Classes`, and then `POST CheckoutShoppingCart` in place of this call.    This endpoint also supports cross-regional class bookings. If you want to perform a cross-regional class booking, set `CrossRegionalBooking` to `true`. This endpoint does not support adding a user to a waiting list using a cross-regional client pricing option(service). Cross-regional booking workflows do not support client service scheduling restrictions.    When performing a cross-regional class booking, this endpoint loops through the first ten sites that the client is associated with, looks for client pricing options at each of those sites, and then uses the oldest client pricing option found.It is important to note that this endpoint only loops through a maximum of ten associated client sites. If a `ClientID` is associated with more than ten sites in an organization, this endpoint only loops through the first ten.If you know that a client has a client service at another site, you can specify that site using the `CrossRegionalBookingClientServiceSiteId` query parameter.    If you perform a cross-regional booking, two additional fields are included in the `SessionType` object of the response:  * `SiteID`, which specifies where the client service is coming from  * `CrossRegionalBookingPerformed`, a Boolean field that is set to `true`    As a prerequisite to using this endpoint, your `SourceName` must have been granted access to the organization to which the site belongs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddClientToClassRequest(); // \Nlocascio\Mindbody\Model\AddClientToClassRequest | 

try {
    $result = $apiInstance->classAddClientToClass($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classAddClientToClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddClientToClassRequest**](../Model/AddClientToClassRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddClientToClassResponse**](../Model/AddClientToClassResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassDescriptions**
> \Nlocascio\Mindbody\Model\GetClassDescriptionsResponse classGetClassDescriptions($RequestClassDescriptionId, $RequestEndClassDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestStaffId, $RequestStartClassDateTime)

Get class descriptions.

To find class descriptions associated with **scheduled classes**, pass `StaffId`, `StartClassDateTime`, `EndClassDateTime`, or `LocationId` in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassDescriptionId = 56; // int | Filters to the single result with the given ID.
$RequestEndClassDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to class descriptions for scheduled classes that happen before the given date and time.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | Filters results to classes descriptions for schedule classes as the given location.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | Filters results to class descriptions belonging to the given programs.
$RequestStaffId = 789; // int | Filters results to class descriptions for scheduled classes taught by the given staff member.
$RequestStartClassDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to class descriptions for scheduled classes that happen on or after the given date and time.

try {
    $result = $apiInstance->classGetClassDescriptions($RequestClassDescriptionId, $RequestEndClassDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestStaffId, $RequestStartClassDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassDescriptionId** | **int**| Filters to the single result with the given ID. | [optional]
 **RequestEndClassDateTime** | **\DateTime**| Filters the results to class descriptions for scheduled classes that happen before the given date and time. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| Filters results to classes descriptions for schedule classes as the given location. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| Filters results to class descriptions belonging to the given programs. | [optional]
 **RequestStaffId** | **int**| Filters results to class descriptions for scheduled classes taught by the given staff member. | [optional]
 **RequestStartClassDateTime** | **\DateTime**| Filters the results to class descriptions for scheduled classes that happen on or after the given date and time. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClassDescriptionsResponse**](../Model/GetClassDescriptionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassSchedules**
> \Nlocascio\Mindbody\Model\GetClassSchedulesResponse classGetClassSchedules($RequestClassScheduleIds, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDate)

Get class schedules.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassScheduleIds = array(56); // int[] | The class schedule IDs.  <br />Default: **all**
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the range. Return any active enrollments that occur on or before this day.  <br />Default: **StartDate**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | The location IDs.   <br />Default: **all**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | The program IDs.   <br />Default: **all**
$RequestSessionTypeIds = array(56); // int[] | The session type IDs.   <br />Default: **all**
$RequestStaffIds = array(56); // int[] | The staff IDs.   <br />Default: **all**
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the range. Return any active enrollments that occur on or after this day.  <br />Default: **today’s date**

try {
    $result = $apiInstance->classGetClassSchedules($RequestClassScheduleIds, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassScheduleIds** | [**int[]**](../Model/int.md)| The class schedule IDs.  &lt;br /&gt;Default: **all** | [optional]
 **RequestEndDate** | **\DateTime**| The end date of the range. Return any active enrollments that occur on or before this day.  &lt;br /&gt;Default: **StartDate** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| The location IDs.   &lt;br /&gt;Default: **all** | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| The program IDs.   &lt;br /&gt;Default: **all** | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| The session type IDs.   &lt;br /&gt;Default: **all** | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| The staff IDs.   &lt;br /&gt;Default: **all** | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the range. Return any active enrollments that occur on or after this day.  &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClassSchedulesResponse**](../Model/GetClassSchedulesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassVisits**
> \Nlocascio\Mindbody\Model\GetClassVisitsResponse classGetClassVisits($RequestClassID, $RequestLastModifiedDate)

Get information about clients booked in a class.

Returns a list of visits that contain information for a specified class. On success, this request returns the class object in the response with a list of visits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassID = 789; // int | The class ID.
$RequestLastModifiedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When included in the request, only records modified on or after the `LastModifiedDate` specified are included in the response.

try {
    $result = $apiInstance->classGetClassVisits($RequestClassID, $RequestLastModifiedDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassID** | **int**| The class ID. | [optional]
 **RequestLastModifiedDate** | **\DateTime**| When included in the request, only records modified on or after the &#x60;LastModifiedDate&#x60; specified are included in the response. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClassVisitsResponse**](../Model/GetClassVisitsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClasses**
> \Nlocascio\Mindbody\Model\GetClassesResponse classGetClasses($RequestClassDescriptionIds, $RequestClassIds, $RequestClientId, $RequestEndDateTime, $RequestHideCanceledClasses, $RequestLastModifiedDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSchedulingWindow, $RequestSemesterIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDateTime)

Get scheduled classes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassDescriptionIds = array(56); // int[] | The requested class description IDs.
$RequestClassIds = array(56); // int[] | The requested class IDs.
$RequestClientId = "RequestClientId_example"; // string | The client ID of the client who is viewing this class list. Based on identity, the client may be able to see additional information, such as membership specials.
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The requested end date for filtering.  <br />Default: **today’s date**
$RequestHideCanceledClasses = true; // bool | When `true`, canceled classes are removed from the response.<br />  When `false`, canceled classes are included in the response.<br />  Default: **false**
$RequestLastModifiedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When included in the request, only records modified on or after the `LastModifiedDate` specified are included in the response.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | A list of location IDs on which to base the search.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | A list of program IDs on which to base the search.
$RequestSchedulingWindow = true; // bool | When `true`, classes outside scheduling window are removed from the response.<br />  When `false`, classes are included in the response, regardless of the scheduling window.<br />  Default: **false**
$RequestSemesterIds = array(56); // int[] | A list of semester IDs on which to base the search.
$RequestSessionTypeIds = array(56); // int[] | A list of session type IDs on which to base the search.
$RequestStaffIds = array(56); // int[] | The requested IDs of the teaching staff members.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The requested start date for filtering.   <br />Default: **today’s date**

try {
    $result = $apiInstance->classGetClasses($RequestClassDescriptionIds, $RequestClassIds, $RequestClientId, $RequestEndDateTime, $RequestHideCanceledClasses, $RequestLastModifiedDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSchedulingWindow, $RequestSemesterIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassDescriptionIds** | [**int[]**](../Model/int.md)| The requested class description IDs. | [optional]
 **RequestClassIds** | [**int[]**](../Model/int.md)| The requested class IDs. | [optional]
 **RequestClientId** | **string**| The client ID of the client who is viewing this class list. Based on identity, the client may be able to see additional information, such as membership specials. | [optional]
 **RequestEndDateTime** | **\DateTime**| The requested end date for filtering.  &lt;br /&gt;Default: **today’s date** | [optional]
 **RequestHideCanceledClasses** | **bool**| When &#x60;true&#x60;, canceled classes are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, canceled classes are included in the response.&lt;br /&gt;  Default: **false** | [optional]
 **RequestLastModifiedDate** | **\DateTime**| When included in the request, only records modified on or after the &#x60;LastModifiedDate&#x60; specified are included in the response. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| A list of location IDs on which to base the search. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| A list of program IDs on which to base the search. | [optional]
 **RequestSchedulingWindow** | **bool**| When &#x60;true&#x60;, classes outside scheduling window are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, classes are included in the response, regardless of the scheduling window.&lt;br /&gt;  Default: **false** | [optional]
 **RequestSemesterIds** | [**int[]**](../Model/int.md)| A list of semester IDs on which to base the search. | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| A list of session type IDs on which to base the search. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| The requested IDs of the teaching staff members. | [optional]
 **RequestStartDateTime** | **\DateTime**| The requested start date for filtering.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClassesResponse**](../Model/GetClassesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetWaitlistEntries**
> \Nlocascio\Mindbody\Model\GetWaitlistEntriesResponse classGetWaitlistEntries($RequestClassIds, $RequestClassScheduleIds, $RequestClientIds, $RequestHidePastEntries, $RequestLimit, $RequestOffset, $RequestWaitlistEntryIds)

Get waiting list entries.

Returns a list of waiting list entries for a specified class schedule or class. The request requires staff credentials and either a class schedule ID or class ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassIds = array(56); // int[] | The requested class IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request. <br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClassIds**
$RequestClassScheduleIds = array(56); // int[] | The requested class schedule IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClassScheduleIds**
$RequestClientIds = array("RequestClientIds_example"); // string[] | The requested client IDs.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClientIds**
$RequestHidePastEntries = true; // bool | When `true`, indicates that past waiting list entries are hidden from clients.<br />  When `false`, indicates that past entries are not hidden from clients.<br />  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestWaitlistEntryIds = array(56); // int[] | The requested waiting list entry IDs.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all WaitlistEntryIds**

try {
    $result = $apiInstance->classGetWaitlistEntries($RequestClassIds, $RequestClassScheduleIds, $RequestClientIds, $RequestHidePastEntries, $RequestLimit, $RequestOffset, $RequestWaitlistEntryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetWaitlistEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassIds** | [**int[]**](../Model/int.md)| The requested class IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request. &lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassIds** | [optional]
 **RequestClassScheduleIds** | [**int[]**](../Model/int.md)| The requested class schedule IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassScheduleIds** | [optional]
 **RequestClientIds** | [**string[]**](../Model/string.md)| The requested client IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClientIds** | [optional]
 **RequestHidePastEntries** | **bool**| When &#x60;true&#x60;, indicates that past waiting list entries are hidden from clients.&lt;br /&gt;  When &#x60;false&#x60;, indicates that past entries are not hidden from clients.&lt;br /&gt;  Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestWaitlistEntryIds** | [**int[]**](../Model/int.md)| The requested waiting list entry IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all WaitlistEntryIds** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetWaitlistEntriesResponse**](../Model/GetWaitlistEntriesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classRemoveClientFromClass**
> \Nlocascio\Mindbody\Model\RemoveClientFromClassResponse classRemoveClientFromClass($Request)

Remove a client from a class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\RemoveClientFromClassRequest(); // \Nlocascio\Mindbody\Model\RemoveClientFromClassRequest | 

try {
    $result = $apiInstance->classRemoveClientFromClass($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classRemoveClientFromClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\RemoveClientFromClassRequest**](../Model/RemoveClientFromClassRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\RemoveClientFromClassResponse**](../Model/RemoveClientFromClassResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classRemoveFromWaitlist**
> \Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse classRemoveFromWaitlist($RequestWaitlistEntryIds)

Remove a client from a waiting list.

This endpoint does not return a response. If a call to this endpoint results in a 200 OK HTTP status code, then the call was successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestWaitlistEntryIds = array(56); // int[] | A list of waiting list IDs to remove from waiting lists.

try {
    $result = $apiInstance->classRemoveFromWaitlist($RequestWaitlistEntryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classRemoveFromWaitlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestWaitlistEntryIds** | [**int[]**](../Model/int.md)| A list of waiting list IDs to remove from waiting lists. |

### Return type

[**\Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse**](../Model/RemoveFromWaitlistResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classSubstituteClassTeacher**
> \Nlocascio\Mindbody\Model\SubstituteClassTeacherResponse classSubstituteClassTeacher($Request)

Substitute a class teacher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\SubstituteClassTeacherRequest(); // \Nlocascio\Mindbody\Model\SubstituteClassTeacherRequest | 

try {
    $result = $apiInstance->classSubstituteClassTeacher($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classSubstituteClassTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\SubstituteClassTeacherRequest**](../Model/SubstituteClassTeacherRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\SubstituteClassTeacherResponse**](../Model/SubstituteClassTeacherResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

