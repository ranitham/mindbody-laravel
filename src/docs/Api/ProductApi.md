# Nlocascio\Mindbody\ProductApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productUpdateProducts**](ProductApi.md#productUpdateProducts) | **PUT** /public/v6/sale/products | Update retail products available for purchase at a site.


# **productUpdateProducts**
> \Nlocascio\Mindbody\Model\GetProductsResponse productUpdateProducts($UpdateProductsRequests)

Update retail products available for purchase at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$UpdateProductsRequests = array(new \Nlocascio\Mindbody\Model\UpdateProductRequest()); // \Nlocascio\Mindbody\Model\UpdateProductRequest[] | 

try {
    $result = $apiInstance->productUpdateProducts($UpdateProductsRequests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateProductsRequests** | [**\Nlocascio\Mindbody\Model\UpdateProductRequest[]**](../Model/UpdateProductRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

