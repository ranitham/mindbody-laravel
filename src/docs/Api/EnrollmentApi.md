# Nlocascio\Mindbody\EnrollmentApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollmentAddClientToEnrollment**](EnrollmentApi.md#enrollmentAddClientToEnrollment) | **POST** /public/v6/enrollment/addclienttoenrollment | Book a client into an enrollment.
[**enrollmentAddEnrollmentSchedule**](EnrollmentApi.md#enrollmentAddEnrollmentSchedule) | **POST** /public/v6/enrollment/addenrollmentschedule | 
[**enrollmentGetEnrollments**](EnrollmentApi.md#enrollmentGetEnrollments) | **GET** /public/v6/enrollment/enrollments | Get enrollments scheduled at a site.
[**enrollmentUpdateEnrollmentSchedule**](EnrollmentApi.md#enrollmentUpdateEnrollmentSchedule) | **POST** /public/v6/enrollment/updateenrollmentschedule | 


# **enrollmentAddClientToEnrollment**
> \Nlocascio\Mindbody\Model\ClassSchedule enrollmentAddClientToEnrollment($Request)

Book a client into an enrollment.

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

$apiInstance = new Nlocascio\Mindbody\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddClientToEnrollmentRequest(); // \Nlocascio\Mindbody\Model\AddClientToEnrollmentRequest | 

try {
    $result = $apiInstance->enrollmentAddClientToEnrollment($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentAddClientToEnrollment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddClientToEnrollmentRequest**](../Model/AddClientToEnrollmentRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\ClassSchedule**](../Model/ClassSchedule.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentAddEnrollmentSchedule**
> object enrollmentAddEnrollmentSchedule($Request)



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

$apiInstance = new Nlocascio\Mindbody\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddClassEnrollmentScheduleRequest(); // \Nlocascio\Mindbody\Model\AddClassEnrollmentScheduleRequest | 

try {
    $result = $apiInstance->enrollmentAddEnrollmentSchedule($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentAddEnrollmentSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddClassEnrollmentScheduleRequest**](../Model/AddClassEnrollmentScheduleRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentGetEnrollments**
> \Nlocascio\Mindbody\Model\GetEnrollmentsResponse enrollmentGetEnrollments($RequestClassScheduleIds, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDate)

Get enrollments scheduled at a site.

Returns a list of enrollments. An enrollment is a service, such as a workshop or an event, that a staff member offers to multiple students, who commit to coming to all or most of the scheduled sessions. Enrollments typically run for a limited time only.                When a user token is not passed with the request or the passed user token has insufficient viewing permissions, only the following staff data is returned in the response:                * FirstName  * LastName  * Id  * Bio  * DisplayName  * ImageUrl

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

$apiInstance = new Nlocascio\Mindbody\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassScheduleIds = array(56); // int[] | A list of the requested class schedule IDs. If omitted, all class schedule IDs return.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range. The response returns any active enrollments that occur on or before this day.<br />  Default: **StartDate**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | List of the IDs for the requested locations. If omitted, all location IDs return.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | List of the IDs for the requested programs. If omitted, all program IDs return.
$RequestSessionTypeIds = array(56); // int[] | List of the IDs for the requested session types. If omitted, all session types IDs return.
$RequestStaffIds = array(56); // int[] | List of the IDs for the requested staff IDs. If omitted, all staff IDs return.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start of the date range. The response returns any active enrollments that occur on or after this day.<br />  Default: **today’s date**

try {
    $result = $apiInstance->enrollmentGetEnrollments($RequestClassScheduleIds, $RequestEndDate, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeIds, $RequestStaffIds, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentGetEnrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassScheduleIds** | [**int[]**](../Model/int.md)| A list of the requested class schedule IDs. If omitted, all class schedule IDs return. | [optional]
 **RequestEndDate** | **\DateTime**| The end of the date range. The response returns any active enrollments that occur on or before this day.&lt;br /&gt;  Default: **StartDate** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| List of the IDs for the requested locations. If omitted, all location IDs return. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| List of the IDs for the requested programs. If omitted, all program IDs return. | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| List of the IDs for the requested session types. If omitted, all session types IDs return. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| List of the IDs for the requested staff IDs. If omitted, all staff IDs return. | [optional]
 **RequestStartDate** | **\DateTime**| The start of the date range. The response returns any active enrollments that occur on or after this day.&lt;br /&gt;  Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetEnrollmentsResponse**](../Model/GetEnrollmentsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentUpdateEnrollmentSchedule**
> object enrollmentUpdateEnrollmentSchedule($Request)



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

$apiInstance = new Nlocascio\Mindbody\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClassEnrollmentScheduleRequest(); // \Nlocascio\Mindbody\Model\UpdateClassEnrollmentScheduleRequest | 

try {
    $result = $apiInstance->enrollmentUpdateEnrollmentSchedule($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentUpdateEnrollmentSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClassEnrollmentScheduleRequest**](../Model/UpdateClassEnrollmentScheduleRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

