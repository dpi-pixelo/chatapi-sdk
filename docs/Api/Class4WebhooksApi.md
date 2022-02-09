# ChatapiApis\Class4WebhooksApi

All URIs are relative to https://api.chat-api.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**setWebhook()**](Class4WebhooksApi.md#setWebhook) | **POST** /webhook | Sets the URL for receiving webhook


## `setWebhook()`

```php
setWebhook($webhook_url): \ChatapiApis\Model\SetWebhookStatus
```

Sets the URL for receiving webhook

Sets the URL for receiving webhook notifications of new messages and message delivery events (ack).  **API responses in \"Callbacks\" tab**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = ChatapiApis\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatapiApis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = ChatapiApis\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatapiApis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new ChatapiApis\Api\Class4WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_url = new \ChatapiApis\Model\WebhookUrl(); // \ChatapiApis\Model\WebhookUrl

try {
    $result = $apiInstance->setWebhook($webhook_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class4WebhooksApi->setWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url** | [**\ChatapiApis\Model\WebhookUrl**](../Model/WebhookUrl.md)|  |

### Return type

[**\ChatapiApis\Model\SetWebhookStatus**](../Model/SetWebhookStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
