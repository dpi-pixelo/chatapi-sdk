<?php
/**
 * Settings
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ChatapiApis
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChatapiApis\Model;

use \ArrayAccess;
use \ChatapiApis\ObjectSerializer;

/**
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  ChatapiApis
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Settings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'webhook_url' => 'string',
        'ack_notifications_on' => 'bool',
        'chat_update_on' => 'bool',
        'video_upload_on' => 'bool',
        'proxy' => 'string',
        'guaranteed_hooks' => 'bool',
        'ignore_old_messages' => 'bool',
        'process_archive' => 'bool',
        'instance_statuses' => 'bool',
        'webhook_statuses' => 'bool',
        'status_notifications_on' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'webhook_url' => null,
        'ack_notifications_on' => null,
        'chat_update_on' => null,
        'video_upload_on' => null,
        'proxy' => null,
        'guaranteed_hooks' => null,
        'ignore_old_messages' => null,
        'process_archive' => null,
        'instance_statuses' => null,
        'webhook_statuses' => null,
        'status_notifications_on' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'webhook_url' => 'webhookUrl',
        'ack_notifications_on' => 'ackNotificationsOn',
        'chat_update_on' => 'chatUpdateOn',
        'video_upload_on' => 'videoUploadOn',
        'proxy' => 'proxy',
        'guaranteed_hooks' => 'guaranteedHooks',
        'ignore_old_messages' => 'ignoreOldMessages',
        'process_archive' => 'processArchive',
        'instance_statuses' => 'instanceStatuses',
        'webhook_statuses' => 'webhookStatuses',
        'status_notifications_on' => 'statusNotificationsOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_url' => 'setWebhookUrl',
        'ack_notifications_on' => 'setAckNotificationsOn',
        'chat_update_on' => 'setChatUpdateOn',
        'video_upload_on' => 'setVideoUploadOn',
        'proxy' => 'setProxy',
        'guaranteed_hooks' => 'setGuaranteedHooks',
        'ignore_old_messages' => 'setIgnoreOldMessages',
        'process_archive' => 'setProcessArchive',
        'instance_statuses' => 'setInstanceStatuses',
        'webhook_statuses' => 'setWebhookStatuses',
        'status_notifications_on' => 'setStatusNotificationsOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_url' => 'getWebhookUrl',
        'ack_notifications_on' => 'getAckNotificationsOn',
        'chat_update_on' => 'getChatUpdateOn',
        'video_upload_on' => 'getVideoUploadOn',
        'proxy' => 'getProxy',
        'guaranteed_hooks' => 'getGuaranteedHooks',
        'ignore_old_messages' => 'getIgnoreOldMessages',
        'process_archive' => 'getProcessArchive',
        'instance_statuses' => 'getInstanceStatuses',
        'webhook_statuses' => 'getWebhookStatuses',
        'status_notifications_on' => 'getStatusNotificationsOn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['webhook_url'] = $data['webhook_url'] ?? null;
        $this->container['ack_notifications_on'] = $data['ack_notifications_on'] ?? null;
        $this->container['chat_update_on'] = $data['chat_update_on'] ?? null;
        $this->container['video_upload_on'] = $data['video_upload_on'] ?? null;
        $this->container['proxy'] = $data['proxy'] ?? null;
        $this->container['guaranteed_hooks'] = $data['guaranteed_hooks'] ?? null;
        $this->container['ignore_old_messages'] = $data['ignore_old_messages'] ?? null;
        $this->container['process_archive'] = $data['process_archive'] ?? null;
        $this->container['instance_statuses'] = $data['instance_statuses'] ?? null;
        $this->container['webhook_statuses'] = $data['webhook_statuses'] ?? null;
        $this->container['status_notifications_on'] = $data['status_notifications_on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets webhook_url
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string|null $webhook_url webhook_url
     *
     * @return self
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets ack_notifications_on
     *
     * @return bool|null
     */
    public function getAckNotificationsOn()
    {
        return $this->container['ack_notifications_on'];
    }

    /**
     * Sets ack_notifications_on
     *
     * @param bool|null $ack_notifications_on ack_notifications_on
     *
     * @return self
     */
    public function setAckNotificationsOn($ack_notifications_on)
    {
        $this->container['ack_notifications_on'] = $ack_notifications_on;

        return $this;
    }

    /**
     * Gets chat_update_on
     *
     * @return bool|null
     */
    public function getChatUpdateOn()
    {
        return $this->container['chat_update_on'];
    }

    /**
     * Sets chat_update_on
     *
     * @param bool|null $chat_update_on chat_update_on
     *
     * @return self
     */
    public function setChatUpdateOn($chat_update_on)
    {
        $this->container['chat_update_on'] = $chat_update_on;

        return $this;
    }

    /**
     * Gets video_upload_on
     *
     * @return bool|null
     */
    public function getVideoUploadOn()
    {
        return $this->container['video_upload_on'];
    }

    /**
     * Sets video_upload_on
     *
     * @param bool|null $video_upload_on video_upload_on
     *
     * @return self
     */
    public function setVideoUploadOn($video_upload_on)
    {
        $this->container['video_upload_on'] = $video_upload_on;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return string|null
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param string|null $proxy proxy
     *
     * @return self
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets guaranteed_hooks
     *
     * @return bool|null
     */
    public function getGuaranteedHooks()
    {
        return $this->container['guaranteed_hooks'];
    }

    /**
     * Sets guaranteed_hooks
     *
     * @param bool|null $guaranteed_hooks guaranteed_hooks
     *
     * @return self
     */
    public function setGuaranteedHooks($guaranteed_hooks)
    {
        $this->container['guaranteed_hooks'] = $guaranteed_hooks;

        return $this;
    }

    /**
     * Gets ignore_old_messages
     *
     * @return bool|null
     */
    public function getIgnoreOldMessages()
    {
        return $this->container['ignore_old_messages'];
    }

    /**
     * Sets ignore_old_messages
     *
     * @param bool|null $ignore_old_messages ignore_old_messages
     *
     * @return self
     */
    public function setIgnoreOldMessages($ignore_old_messages)
    {
        $this->container['ignore_old_messages'] = $ignore_old_messages;

        return $this;
    }

    /**
     * Gets process_archive
     *
     * @return bool|null
     */
    public function getProcessArchive()
    {
        return $this->container['process_archive'];
    }

    /**
     * Sets process_archive
     *
     * @param bool|null $process_archive process_archive
     *
     * @return self
     */
    public function setProcessArchive($process_archive)
    {
        $this->container['process_archive'] = $process_archive;

        return $this;
    }

    /**
     * Gets instance_statuses
     *
     * @return bool|null
     */
    public function getInstanceStatuses()
    {
        return $this->container['instance_statuses'];
    }

    /**
     * Sets instance_statuses
     *
     * @param bool|null $instance_statuses instance_statuses
     *
     * @return self
     */
    public function setInstanceStatuses($instance_statuses)
    {
        $this->container['instance_statuses'] = $instance_statuses;

        return $this;
    }

    /**
     * Gets webhook_statuses
     *
     * @return bool|null
     */
    public function getWebhookStatuses()
    {
        return $this->container['webhook_statuses'];
    }

    /**
     * Sets webhook_statuses
     *
     * @param bool|null $webhook_statuses webhook_statuses
     *
     * @return self
     */
    public function setWebhookStatuses($webhook_statuses)
    {
        $this->container['webhook_statuses'] = $webhook_statuses;

        return $this;
    }

    /**
     * Gets status_notifications_on
     *
     * @return bool|null
     */
    public function getStatusNotificationsOn()
    {
        return $this->container['status_notifications_on'];
    }

    /**
     * Sets status_notifications_on
     *
     * @param bool|null $status_notifications_on status_notifications_on
     *
     * @return self
     */
    public function setStatusNotificationsOn($status_notifications_on)
    {
        $this->container['status_notifications_on'] = $status_notifications_on;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


