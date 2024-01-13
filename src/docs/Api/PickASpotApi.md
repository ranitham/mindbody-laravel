# Nlocascio\Mindbody\PickASpotApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pickASpotCreateReservation**](PickASpotApi.md#pickASpotCreateReservation) | **POST** /public/v6/pickaspot/v1/reservation/{pathInfo} | Creates a reservation for a given pick-a-spot class.
[**pickASpotDeleteReservation**](PickASpotApi.md#pickASpotDeleteReservation) | **DELETE** /public/v6/pickaspot/v1/reservation/{pathInfo} | This endpoint deletes a single reservation.
[**pickASpotGetClass**](PickASpotApi.md#pickASpotGetClass) | **GET** /public/v6/pickaspot/v1/class/{classId} | Get a class filtered by classId.
[**pickASpotGetClassList**](PickASpotApi.md#pickASpotGetClassList) | **GET** /public/v6/pickaspot/v1/class | Get a list of classes as they relate to pick-a-spot.
[**pickASpotGetReservation**](PickASpotApi.md#pickASpotGetReservation) | **GET** /public/v6/pickaspot/v1/reservation/{pathInfo} | Retrieves reservation for Pick a Spot.
[**pickASpotUpdateReservation**](PickASpotApi.md#pickASpotUpdateReservation) | **PUT** /public/v6/pickaspot/v1/reservation/{pathInfo} | This endpoint updates a single reservation.


# **pickASpotCreateReservation**
> \Nlocascio\Mindbody\Model\PickASpotCreateReservationResponse pickASpotCreateReservation($PathInfo)

Creates a reservation for a given pick-a-spot class.

Creates a spot reservation for a given pick-a-spot class. The actual class visit must be created prior to calling this endpoint.  A user token is required for this endpoint.                Sample request:                    POST /pickaspot/v1/reservation      {          \"SiteId\": -1147483363,          \"LocationId\": 1,          \"ClassId\": \"64b14ac8c20ae8f0afd2d409\",          \"ReservationExternalId\": \"44724\", // this is a Visit.Id and should be linked to a specific class visit          \"MemberExternalId\": \"100000136\", // this is Client's UniqueId          \"SpotNumber\": \"5\",          \"ReservationDisplayName\": \"ReservationDisplayName\", // optional          \"ReservationType\": \"Member\" // optional. Can be Member, Guest, Instructor, FamilyMember      }

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$PathInfo = "PathInfo_example"; // string | 

try {
    $result = $apiInstance->pickASpotCreateReservation($PathInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotCreateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **PathInfo** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\PickASpotCreateReservationResponse**](../Model/PickASpotCreateReservationResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickASpotDeleteReservation**
> \Nlocascio\Mindbody\Model\SystemNetHttpHttpContent pickASpotDeleteReservation($PathInfo)

This endpoint deletes a single reservation.

A user token is required for this endpoint.  This endpoint deletes a single reservation.

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$PathInfo = "PathInfo_example"; // string | 

try {
    $result = $apiInstance->pickASpotDeleteReservation($PathInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotDeleteReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **PathInfo** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\SystemNetHttpHttpContent**](../Model/SystemNetHttpHttpContent.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickASpotGetClass**
> \Nlocascio\Mindbody\Model\PickASpotGetPickASpotClassResponse pickASpotGetClass($ClassId)

Get a class filtered by classId.

Get a class filtered by classId.

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ClassId = "ClassId_example"; // string | 

try {
    $result = $apiInstance->pickASpotGetClass($ClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotGetClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ClassId** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\PickASpotGetPickASpotClassResponse**](../Model/PickASpotGetPickASpotClassResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickASpotGetClassList**
> \Nlocascio\Mindbody\Model\PickASpotGetPickASpotClassResponse pickASpotGetClassList()

Get a list of classes as they relate to pick-a-spot.

This endpoint supports pagination. See Pagination object for a description.

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pickASpotGetClassList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotGetClassList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nlocascio\Mindbody\Model\PickASpotGetPickASpotClassResponse**](../Model/PickASpotGetPickASpotClassResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickASpotGetReservation**
> \Nlocascio\Mindbody\Model\PickASpotGetReservationResponse pickASpotGetReservation($PathInfo)

Retrieves reservation for Pick a Spot.

Retrieves reservation for Pick a Spot.

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$PathInfo = "PathInfo_example"; // string | 

try {
    $result = $apiInstance->pickASpotGetReservation($PathInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotGetReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **PathInfo** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\PickASpotGetReservationResponse**](../Model/PickASpotGetReservationResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickASpotUpdateReservation**
> \Nlocascio\Mindbody\Model\PickASpotUpdateReservationResponse pickASpotUpdateReservation($PathInfo)

This endpoint updates a single reservation.

A user token is required for this endpoint.  This endpoint updates a single reservation.

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

$apiInstance = new Nlocascio\Mindbody\Api\PickASpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$PathInfo = "PathInfo_example"; // string | 

try {
    $result = $apiInstance->pickASpotUpdateReservation($PathInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickASpotApi->pickASpotUpdateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **PathInfo** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\PickASpotUpdateReservationResponse**](../Model/PickASpotUpdateReservationResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

