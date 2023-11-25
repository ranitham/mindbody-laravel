# Nlocascio\Mindbody\AppointmentApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentAddAppointment**](AppointmentApi.md#appointmentAddAppointment) | **POST** /public/v6/appointment/addappointment | Book a new appointment.
[**appointmentAddAppointmentAddOn**](AppointmentApi.md#appointmentAddAppointmentAddOn) | **POST** /public/v6/appointment/addappointmentaddon | Add Appointment Add-On
[**appointmentAddAvailabilities**](AppointmentApi.md#appointmentAddAvailabilities) | **POST** /public/v6/appointment/availabilities | Add Availabillity/Unavailabillity.
[**appointmentDeleteAppointmentAddOn**](AppointmentApi.md#appointmentDeleteAppointmentAddOn) | **DELETE** /public/v6/appointment/deleteappointmentaddon | Early Cancel/Remove an Appointment Add-On
[**appointmentDeleteAvailability**](AppointmentApi.md#appointmentDeleteAvailability) | **DELETE** /public/v6/appointment/availability | Delete availability/unavailability of the staff
[**appointmentGetActiveSessionTimes**](AppointmentApi.md#appointmentGetActiveSessionTimes) | **GET** /public/v6/appointment/activesessiontimes | Get active session times.
[**appointmentGetAddOns**](AppointmentApi.md#appointmentGetAddOns) | **GET** /public/v6/appointment/addons | Get add ons
[**appointmentGetAppointmentOptions**](AppointmentApi.md#appointmentGetAppointmentOptions) | **GET** /public/v6/appointment/appointmentoptions | Get appointment-related settings.
[**appointmentGetAvailableDates**](AppointmentApi.md#appointmentGetAvailableDates) | **GET** /public/v6/appointment/availabledates | Get dates where there is scheduled appointment availability for the given session types.
[**appointmentGetBookableItems**](AppointmentApi.md#appointmentGetBookableItems) | **GET** /public/v6/appointment/bookableitems | Get staff appointment availability.
[**appointmentGetScheduleItems**](AppointmentApi.md#appointmentGetScheduleItems) | **GET** /public/v6/appointment/scheduleitems | Get appointment schedule.
[**appointmentGetStaffAppointments**](AppointmentApi.md#appointmentGetStaffAppointments) | **GET** /public/v6/appointment/staffappointments | Get appointments grouped by staff member.
[**appointmentGetUnavailabilities**](AppointmentApi.md#appointmentGetUnavailabilities) | **GET** /public/v6/appointment/unavailabilities | Get unavailabilities.
[**appointmentRemoveFromWaitlist**](AppointmentApi.md#appointmentRemoveFromWaitlist) | **DELETE** /public/v6/appointment/appointmentfromwaitlist | Remove an appointment from waitlist
[**appointmentUpdateAppointment**](AppointmentApi.md#appointmentUpdateAppointment) | **POST** /public/v6/appointment/updateappointment | Update an existing appointment.
[**appointmentUpdateAvailability**](AppointmentApi.md#appointmentUpdateAvailability) | **PUT** /public/v6/appointment/availabilities | Update availability/unavailability of the staff


# **appointmentAddAppointment**
> \Nlocascio\Mindbody\Model\AddAppointmentResponse appointmentAddAppointment($Request)

Book a new appointment.

A user token is required for this endpoint. To book an appointment, you must use a location ID, staff ID, client ID, session type ID, and the StartDateTime of the appointment. You can get most of this information using GET BookableItems.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddAppointmentRequest(); // \Nlocascio\Mindbody\Model\AddAppointmentRequest | 

try {
    $result = $apiInstance->appointmentAddAppointment($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentAddAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddAppointmentRequest**](../Model/AddAppointmentRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddAppointmentResponse**](../Model/AddAppointmentResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentAddAppointmentAddOn**
> \Nlocascio\Mindbody\Model\AddAppointmentAddOnResponse appointmentAddAppointmentAddOn($Request)

Add Appointment Add-On

This endpoint books an add-on on top of an existing, regular appointment. To book an add-on, you must use an existing appointment ID and session type ID. You can get a session type ID using `GET AppointmentAddOns`.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddAppointmentAddOnRequest(); // \Nlocascio\Mindbody\Model\AddAppointmentAddOnRequest | 

try {
    $result = $apiInstance->appointmentAddAppointmentAddOn($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentAddAppointmentAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddAppointmentAddOnRequest**](../Model/AddAppointmentAddOnRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddAppointmentAddOnResponse**](../Model/AddAppointmentAddOnResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentAddAvailabilities**
> \Nlocascio\Mindbody\Model\AddAvailabilitiesResponse appointmentAddAvailabilities($Request)

Add Availabillity/Unavailabillity.

Add availabilities and unavailabilities for a staff member.<br />  Note: You must have a staff user token with the required permissions.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddAvailabilitiesRequest(); // \Nlocascio\Mindbody\Model\AddAvailabilitiesRequest | 

try {
    $result = $apiInstance->appointmentAddAvailabilities($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentAddAvailabilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddAvailabilitiesRequest**](../Model/AddAvailabilitiesRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddAvailabilitiesResponse**](../Model/AddAvailabilitiesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentDeleteAppointmentAddOn**
> appointmentDeleteAppointmentAddOn($Id)

Early Cancel/Remove an Appointment Add-On

This endpoint can be used to early-cancel a booked appointment add-on.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Id = 789; // int | 

try {
    $apiInstance->appointmentDeleteAppointmentAddOn($Id);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentDeleteAppointmentAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentDeleteAvailability**
> appointmentDeleteAvailability($DeleteAvailabilityRequestAvailabilityId, $DeleteAvailabilityRequestTest)

Delete availability/unavailability of the staff

This endpoint deletes the availability or unavailability.  Note: You must have a staff user token with the required permissions.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$DeleteAvailabilityRequestAvailabilityId = 56; // int | The ID of the availability or unavailability.
$DeleteAvailabilityRequestTest = true; // bool | When `true`, indicates that this is a test request and no data is deleted from the subscriber’s database.  When `false`, the record will be deleted.  Default: **false**

try {
    $apiInstance->appointmentDeleteAvailability($DeleteAvailabilityRequestAvailabilityId, $DeleteAvailabilityRequestTest);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentDeleteAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **DeleteAvailabilityRequestAvailabilityId** | **int**| The ID of the availability or unavailability. | [optional]
 **DeleteAvailabilityRequestTest** | **bool**| When &#x60;true&#x60;, indicates that this is a test request and no data is deleted from the subscriber’s database.  When &#x60;false&#x60;, the record will be deleted.  Default: **false** | [optional]

### Return type

void (empty response body)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetActiveSessionTimes**
> \Nlocascio\Mindbody\Model\GetActiveSessionTimesResponse appointmentGetActiveSessionTimes($RequestEndTime, $RequestLimit, $RequestOffset, $RequestScheduleType, $RequestSessionTypeIds, $RequestStartTime)

Get active session times.

This is not appointment availability but rather the active business hours for studios and which increments services can be booked at. See BookableItems for appointment availability.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to times that end on or before this time on the current date. Any date provided is ignored..  <br />Default: **23:59:59**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestScheduleType = "RequestScheduleType_example"; // string | Filters on the provided the schedule type. Either `SessionTypeIds` or `ScheduleType` must be provided.
$RequestSessionTypeIds = array(56); // int[] | Filters on the provided session type IDs. Either `SessionTypeIds` or `ScheduleType` must be provided.
$RequestStartTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to times that start on or after this time on the current date. Any date provided is ignored.  <br />Default: **00:00:00**

try {
    $result = $apiInstance->appointmentGetActiveSessionTimes($RequestEndTime, $RequestLimit, $RequestOffset, $RequestScheduleType, $RequestSessionTypeIds, $RequestStartTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetActiveSessionTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndTime** | **\DateTime**| Filters results to times that end on or before this time on the current date. Any date provided is ignored..  &lt;br /&gt;Default: **23:59:59** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestScheduleType** | **string**| Filters on the provided the schedule type. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| Filters on the provided session type IDs. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional]
 **RequestStartTime** | **\DateTime**| Filters results to times that start on or after this time on the current date. Any date provided is ignored.  &lt;br /&gt;Default: **00:00:00** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetActiveSessionTimesResponse**](../Model/GetActiveSessionTimesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetAddOns**
> \Nlocascio\Mindbody\Model\GetAddOnsResponse appointmentGetAddOns($RequestLimit, $RequestOffset, $RequestStaffId)

Get add ons

Get active appointment add-ons.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffId = 56; // int | Filter to add-ons only performed by this staff member.

try {
    $result = $apiInstance->appointmentGetAddOns($RequestLimit, $RequestOffset, $RequestStaffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetAddOns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffId** | **int**| Filter to add-ons only performed by this staff member. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetAddOnsResponse**](../Model/GetAddOnsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetAppointmentOptions**
> \Nlocascio\Mindbody\Model\GetAppointmentOptionsResponse appointmentGetAppointmentOptions()

Get appointment-related settings.

This endpoint has no query parameters.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appointmentGetAppointmentOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetAppointmentOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nlocascio\Mindbody\Model\GetAppointmentOptionsResponse**](../Model/GetAppointmentOptionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetAvailableDates**
> \Nlocascio\Mindbody\Model\GetAvailableDatesResponse appointmentGetAvailableDates($RequestSessionTypeId, $RequestEndDate, $RequestLocationId, $RequestStaffId, $RequestStartDate)

Get dates where there is scheduled appointment availability for the given session types.

Returns a list of dates to narrow down staff availability when booking. Dates are those which staff are scheduled to work and do not guarantee booking availabilities. After this call is made, use GET BookableItems to retrieve availabilities for specific dates before booking.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestSessionTypeId = 56; // int | required requested session type ID.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **StartDate**
$RequestLocationId = 56; // int | optional requested location ID.
$RequestStaffId = 789; // int | optional requested staff ID.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range. If omitted, the default is used.  <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetAvailableDates($RequestSessionTypeId, $RequestEndDate, $RequestLocationId, $RequestStaffId, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetAvailableDates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestSessionTypeId** | **int**| required requested session type ID. |
 **RequestEndDate** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional]
 **RequestLocationId** | **int**| optional requested location ID. | [optional]
 **RequestStaffId** | **int**| optional requested staff ID. | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the requested date range. If omitted, the default is used.  &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetAvailableDatesResponse**](../Model/GetAvailableDatesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetBookableItems**
> \Nlocascio\Mindbody\Model\GetBookableItemsResponse appointmentGetBookableItems($RequestSessionTypeIds, $RequestAppointmentId, $RequestEndDate, $RequestIgnoreDefaultSessionLength, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate)

Get staff appointment availability.

Returns a list of availabilities with the information needed to book appointments. Availabilities include information such as the location and its amenities, staff members, programs, and session types. Recommended to use with ActiveSessionTimes to see which increments each business allows for booking appointments.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestSessionTypeIds = array(56); // int[] | A list of the requested session type IDs.
$RequestAppointmentId = 789; // int | If provided, filters out the appointment with this ID.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **StartDate**
$RequestIgnoreDefaultSessionLength = true; // bool | When `true`, availabilities that are non-default return, for example, a 30-minute availability with a 60-minute default session length.<br />  When `false`, only availabilities that have the default session length return.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | A list of the requested location IDs.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffIds = array(56); // int[] | A list of the requested staff IDs. Omit parameter to return all staff availabilities.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetBookableItems($RequestSessionTypeIds, $RequestAppointmentId, $RequestEndDate, $RequestIgnoreDefaultSessionLength, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetBookableItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| A list of the requested session type IDs. |
 **RequestAppointmentId** | **int**| If provided, filters out the appointment with this ID. | [optional]
 **RequestEndDate** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional]
 **RequestIgnoreDefaultSessionLength** | **bool**| When &#x60;true&#x60;, availabilities that are non-default return, for example, a 30-minute availability with a 60-minute default session length.&lt;br /&gt;  When &#x60;false&#x60;, only availabilities that have the default session length return. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| A list of the requested location IDs. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| A list of the requested staff IDs. Omit parameter to return all staff availabilities. | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetBookableItemsResponse**](../Model/GetBookableItemsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetScheduleItems**
> \Nlocascio\Mindbody\Model\GetScheduleItemsResponse appointmentGetScheduleItems($RequestEndDate, $RequestIgnorePrepFinishTimes, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate)

Get appointment schedule.

Returns a list of schedule items, including appointments, availabilities, and unavailabilities. Unavailabilities are the times at which appointments cannot be booked, for example, on holidays or after hours when the business is closed.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **today’s date**
$RequestIgnorePrepFinishTimes = true; // bool | When `true`, appointment preparation and finish unavailabilities are not returned.   <br />Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | A list of requested location IDs.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffIds = array(56); // int[] | A list of requested staff IDs.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetScheduleItems($RequestEndDate, $RequestIgnorePrepFinishTimes, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetScheduleItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDate** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]
 **RequestIgnorePrepFinishTimes** | **bool**| When &#x60;true&#x60;, appointment preparation and finish unavailabilities are not returned.   &lt;br /&gt;Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| A list of requested location IDs. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| A list of requested staff IDs. | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetScheduleItemsResponse**](../Model/GetScheduleItemsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetStaffAppointments**
> \Nlocascio\Mindbody\Model\GetStaffAppointmentsResponse appointmentGetStaffAppointments($RequestAppointmentIds, $RequestClientId, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate)

Get appointments grouped by staff member.

Returns a list of appointments by staff member.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestAppointmentIds = array(56); // int[] | A list of the requested appointment IDs.
$RequestClientId = "RequestClientId_example"; // string | The client ID to be returned.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **StartDate**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | A list of the requested location IDs.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffIds = array(56); // int[] | List of staff IDs to be returned. Use a value of zero to return all staff appointments.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range. If omitted, the default is used.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetStaffAppointments($RequestAppointmentIds, $RequestClientId, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetStaffAppointments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestAppointmentIds** | [**int[]**](../Model/int.md)| A list of the requested appointment IDs. | [optional]
 **RequestClientId** | **string**| The client ID to be returned. | [optional]
 **RequestEndDate** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| A list of the requested location IDs. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| List of staff IDs to be returned. Use a value of zero to return all staff appointments. | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the requested date range. If omitted, the default is used.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetStaffAppointmentsResponse**](../Model/GetStaffAppointmentsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetUnavailabilities**
> \Nlocascio\Mindbody\Model\GetUnavailabilitiesResponse appointmentGetUnavailabilities($RequestEndDate, $RequestLimit, $RequestOffset, $RequestStaffIds, $RequestStartDate)

Get unavailabilities.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **today’s date**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffIds = array(56); // int[] | A list of requested staff IDs.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetUnavailabilities($RequestEndDate, $RequestLimit, $RequestOffset, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetUnavailabilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDate** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| A list of requested staff IDs. | [optional]
 **RequestStartDate** | **\DateTime**| The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetUnavailabilitiesResponse**](../Model/GetUnavailabilitiesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentRemoveFromWaitlist**
> \Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse appointmentRemoveFromWaitlist($RequestWaitlistEntryIds)

Remove an appointment from waitlist

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestWaitlistEntryIds = array(56); // int[] | A list of `WaitlistEntryIds` to remove from the waiting list.

try {
    $result = $apiInstance->appointmentRemoveFromWaitlist($RequestWaitlistEntryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentRemoveFromWaitlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestWaitlistEntryIds** | [**int[]**](../Model/int.md)| A list of &#x60;WaitlistEntryIds&#x60; to remove from the waiting list. |

### Return type

[**\Nlocascio\Mindbody\Model\RemoveFromWaitlistResponse**](../Model/RemoveFromWaitlistResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentUpdateAppointment**
> \Nlocascio\Mindbody\Model\UpdateAppointmentResponse appointmentUpdateAppointment($Request)

Update an existing appointment.

To update the information for a specific appointment, you must have a staff user token with the proper permissions. Note that you can only update the appointment’s `StartDateTime`, `EndDateTime`, `StaffId`, `Notes`, and `SessionTypeId`.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateAppointmentRequest(); // \Nlocascio\Mindbody\Model\UpdateAppointmentRequest | 

try {
    $result = $apiInstance->appointmentUpdateAppointment($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentUpdateAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateAppointmentRequest**](../Model/UpdateAppointmentRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateAppointmentResponse**](../Model/UpdateAppointmentResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentUpdateAvailability**
> \Nlocascio\Mindbody\Model\UpdateAvailabilityResponse appointmentUpdateAvailability($UpdateAvailabilityRequest)

Update availability/unavailability of the staff

To update the information for a specific availability or unavailability of the staff.<br />  Note: You must have a staff user token with the required permissions.

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

$apiInstance = new Nlocascio\Mindbody\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$UpdateAvailabilityRequest = new \Nlocascio\Mindbody\Model\UpdateAvailabilityRequest(); // \Nlocascio\Mindbody\Model\UpdateAvailabilityRequest | 

try {
    $result = $apiInstance->appointmentUpdateAvailability($UpdateAvailabilityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentUpdateAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateAvailabilityRequest** | [**\Nlocascio\Mindbody\Model\UpdateAvailabilityRequest**](../Model/UpdateAvailabilityRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateAvailabilityResponse**](../Model/UpdateAvailabilityResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

