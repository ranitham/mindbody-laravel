# Nlocascio\Mindbody\StaffApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**staffAddStaff**](StaffApi.md#staffAddStaff) | **POST** /public/v6/staff/addstaff | 
[**staffAddStaffAvailability**](StaffApi.md#staffAddStaffAvailability) | **POST** /public/v6/staff/staffavailability | 
[**staffAssignStaffSessionType**](StaffApi.md#staffAssignStaffSessionType) | **POST** /public/v6/staff/assignsessiontype | 
[**staffGetSalesReps**](StaffApi.md#staffGetSalesReps) | **GET** /public/v6/staff/salesreps | 
[**staffGetStaff**](StaffApi.md#staffGetStaff) | **GET** /public/v6/staff/staff | Get staff members at a site.
[**staffGetStaffImageURL**](StaffApi.md#staffGetStaffImageURL) | **GET** /public/v6/staff/imageurl | Get image URLs for the given staff ID in the request.
[**staffGetStaffPermissions**](StaffApi.md#staffGetStaffPermissions) | **GET** /public/v6/staff/staffpermissions | Get configured staff permissions for a staff member.
[**staffGetStaffSessionTypes**](StaffApi.md#staffGetStaffSessionTypes) | **GET** /public/v6/staff/sessiontypes | Get the session types used at a site for a staff member.
[**staffUpdateStaff**](StaffApi.md#staffUpdateStaff) | **POST** /public/v6/staff/updatestaff | 
[**staffUpdateStaffPermissions**](StaffApi.md#staffUpdateStaffPermissions) | **POST** /public/v6/staff/updatestaffpermissions | 


# **staffAddStaff**
> \Nlocascio\Mindbody\Model\AddStaffResponse staffAddStaff($Request)



Creates a new staff member record at the specified business. The `FirstName` and `LastName` parameters are always required for this request.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddStaffRequest(); // \Nlocascio\Mindbody\Model\AddStaffRequest | 

try {
    $result = $apiInstance->staffAddStaff($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffAddStaff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddStaffRequest**](../Model/AddStaffRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddStaffResponse**](../Model/AddStaffResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffAddStaffAvailability**
> staffAddStaffAvailability($Request)



Enables to add staff availability or unavailability for a given staff member.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddStaffAvailabilityRequest(); // \Nlocascio\Mindbody\Model\AddStaffAvailabilityRequest | 

try {
    $apiInstance->staffAddStaffAvailability($Request);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffAddStaffAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddStaffAvailabilityRequest**](../Model/AddStaffAvailabilityRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffAssignStaffSessionType**
> \Nlocascio\Mindbody\Model\AssignStaffSessionTypeResponse staffAssignStaffSessionType($Request)



Assigns a staff member to an appointment session type with staff specific properties such as time length and pay rate. A staff user token must be included with staff assigned the ManageStaffPayRates permission.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AssignStaffSessionTypeRequest(); // \Nlocascio\Mindbody\Model\AssignStaffSessionTypeRequest | 

try {
    $result = $apiInstance->staffAssignStaffSessionType($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffAssignStaffSessionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AssignStaffSessionTypeRequest**](../Model/AssignStaffSessionTypeRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AssignStaffSessionTypeResponse**](../Model/AssignStaffSessionTypeResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetSalesReps**
> \Nlocascio\Mindbody\Model\GetSalesRepsResponse staffGetSalesReps($RequestActiveOnly, $RequestLimit, $RequestOffset, $RequestSalesRepNumbers)



This endpoint returns the basic details of the staffs that are marked as sales reps.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActiveOnly = true; // bool | When `true`, will return only active reps data.  Default : **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSalesRepNumbers = array(56); // int[] | This is the list of the sales rep numbers for which the salesrep data will be fetched.

try {
    $result = $apiInstance->staffGetSalesReps($RequestActiveOnly, $RequestLimit, $RequestOffset, $RequestSalesRepNumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetSalesReps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActiveOnly** | **bool**| When &#x60;true&#x60;, will return only active reps data.  Default : **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSalesRepNumbers** | [**int[]**](../Model/int.md)| This is the list of the sales rep numbers for which the salesrep data will be fetched. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetSalesRepsResponse**](../Model/GetSalesRepsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetStaff**
> \Nlocascio\Mindbody\Model\GetStaffResponse staffGetStaff($RequestFilters, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSessionTypeId, $RequestStaffIds, $RequestStartDateTime)

Get staff members at a site.

When a user token is not passed with the request or the passed user token has insufficient viewing permissions, only the following staff data is returned in the response:                * FirstName  * LastName  * Id  * Bio  * DisplayName  * ImageUrl  * EmpID

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestFilters = array("RequestFilters_example"); // string[] | Filters to apply to the search. Possible values are:  * StaffViewable  * AppointmentInstructor  * ClassInstructor  * Male  * Female
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | Return only staff members that are available at the specified location. You must supply a valid `SessionTypeID` and `StartDateTime` to use this parameter.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSessionTypeId = 56; // int | Return only staff members that are available for the specified session type. You must supply a valid `StartDateTime` and `LocationID` to use this parameter.
$RequestStaffIds = array(56); // int[] | A list of the requested staff IDs.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only staff members that are available at the specified date and time. You must supply a valid `SessionTypeID` and `LocationID` to use this parameter.

try {
    $result = $apiInstance->staffGetStaff($RequestFilters, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSessionTypeId, $RequestStaffIds, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestFilters** | [**string[]**](../Model/string.md)| Filters to apply to the search. Possible values are:  * StaffViewable  * AppointmentInstructor  * ClassInstructor  * Male  * Female | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| Return only staff members that are available at the specified location. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;StartDateTime&#x60; to use this parameter. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSessionTypeId** | **int**| Return only staff members that are available for the specified session type. You must supply a valid &#x60;StartDateTime&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| A list of the requested staff IDs. | [optional]
 **RequestStartDateTime** | **\DateTime**| Return only staff members that are available at the specified date and time. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetStaffResponse**](../Model/GetStaffResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetStaffImageURL**
> \Nlocascio\Mindbody\Model\GetStaffImageURLResponse staffGetStaffImageURL($RequestStaffId)

Get image URLs for the given staff ID in the request.

This endpoint can be utilized to retrieve image urls for requested staff member.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestStaffId = 789; // int | The ID of the staff member whose image URL details you want to retrieve.

try {
    $result = $apiInstance->staffGetStaffImageURL($RequestStaffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaffImageURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestStaffId** | **int**| The ID of the staff member whose image URL details you want to retrieve. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetStaffImageURLResponse**](../Model/GetStaffImageURLResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetStaffPermissions**
> \Nlocascio\Mindbody\Model\GetStaffPermissionsResponse staffGetStaffPermissions($RequestStaffId)

Get configured staff permissions for a staff member.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestStaffId = 789; // int | The ID of the staff member whose permissions you want to return.

try {
    $result = $apiInstance->staffGetStaffPermissions($RequestStaffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaffPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestStaffId** | **int**| The ID of the staff member whose permissions you want to return. |

### Return type

[**\Nlocascio\Mindbody\Model\GetStaffPermissionsResponse**](../Model/GetStaffPermissionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetStaffSessionTypes**
> \Nlocascio\Mindbody\Model\GetStaffSessionTypesResponse staffGetStaffSessionTypes($RequestStaffId, $RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestProgramIds)

Get the session types used at a site for a staff member.

Gets a list of active session types for a specific staff member. A staff user token must be included with staff assigned the ManageStaffPayRates permission.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestStaffId = 789; // int | The ID of the staff member whose session types you want to return.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestOnlineOnly = true; // bool | When `true`, indicates that only the session types that can be booked online should be returned.  Default: false
$RequestProgramIds = array(56); // int[] | Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return.

try {
    $result = $apiInstance->staffGetStaffSessionTypes($RequestStaffId, $RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestProgramIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaffSessionTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestStaffId** | **int**| The ID of the staff member whose session types you want to return. |
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestOnlineOnly** | **bool**| When &#x60;true&#x60;, indicates that only the session types that can be booked online should be returned.  Default: false | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetStaffSessionTypesResponse**](../Model/GetStaffSessionTypesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffUpdateStaff**
> \Nlocascio\Mindbody\Model\UpdateStaffResponse staffUpdateStaff($Request)



Updates an existing staff member record at the specified business. The ID is a required parameters for this request.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateStaffRequest(); // \Nlocascio\Mindbody\Model\UpdateStaffRequest | 

try {
    $result = $apiInstance->staffUpdateStaff($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffUpdateStaff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateStaffRequest**](../Model/UpdateStaffRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateStaffResponse**](../Model/UpdateStaffResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffUpdateStaffPermissions**
> \Nlocascio\Mindbody\Model\UpdateStaffPermissionsResponse staffUpdateStaffPermissions($Request)



Assigns a permission group to a staff member. A staff user token must be included with staff assigned the ManageStaffPayRates permission.

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

$apiInstance = new Nlocascio\Mindbody\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateStaffPermissionsRequest(); // \Nlocascio\Mindbody\Model\UpdateStaffPermissionsRequest | 

try {
    $result = $apiInstance->staffUpdateStaffPermissions($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffUpdateStaffPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateStaffPermissionsRequest**](../Model/UpdateStaffPermissionsRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateStaffPermissionsResponse**](../Model/UpdateStaffPermissionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

