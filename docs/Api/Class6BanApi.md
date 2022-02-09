# ChatapiApis\Class6BanApi

All URIs are relative to https://api.chat-api.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**banTest()**](Class6BanApi.md#banTest) | **POST** /banTest | Test ban settings
[**getBanSettings()**](Class6BanApi.md#getBanSettings) | **GET** /banSettings | Get settings
[**setBanSettings()**](Class6BanApi.md#setBanSettings) | **POST** /banSettings | Set settings


## `banTest()`

```php
banTest($ban_test_action): \ChatapiApis\Model\BanTestStatus
```

Test ban settings

Send the phone number to find out if the instance is banning it

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


$apiInstance = new ChatapiApis\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ban_test_action = new \ChatapiApis\Model\BanTestAction(); // \ChatapiApis\Model\BanTestAction

try {
    $result = $apiInstance->banTest($ban_test_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->banTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ban_test_action** | [**\ChatapiApis\Model\BanTestAction**](../Model/BanTestAction.md)|  |

### Return type

[**\ChatapiApis\Model\BanTestStatus**](../Model/BanTestStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanSettings()`

```php
getBanSettings(): \ChatapiApis\Model\BanSettings
```

Get settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

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


$apiInstance = new ChatapiApis\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBanSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->getBanSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChatapiApis\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBanSettings()`

```php
setBanSettings($ban_settings): \ChatapiApis\Model\BanSettings
```

Set settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

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


$apiInstance = new ChatapiApis\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ban_settings = new \ChatapiApis\Model\BanSettings(); // \ChatapiApis\Model\BanSettings

try {
    $result = $apiInstance->setBanSettings($ban_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->setBanSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ban_settings** | [**\ChatapiApis\Model\BanSettings**](../Model/BanSettings.md)|  |

### Return type

[**\ChatapiApis\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
