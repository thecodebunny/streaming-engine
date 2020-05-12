<?php
/**
 * LiveComment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thecodebunny\StreamingEngine
 * @author   TCB Codegen team
 * @link     https://github.com/tcb-api/tcb-codegen
 */

/**
 * Streaming Server REST API Reference
 *
 * Streaming Server REST API Reference
 *
 * OpenAPI spec version: V2.0
 * Contact: contact@thecodebunny.com
 * Generated by: https://github.com/tcb-api/tcb-codegen.git
 * TCB Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the tcb code generator program.
 * https://github.com/tcb-api/tcb-codegen
 * Do not edit the class manually.
 */

namespace Thecodebunny\StreamingEngine\Model;

use \ArrayAccess;
use \Thecodebunny\StreamingEngine\ObjectSerializer;

/**
 * LiveComment Class Doc Comment
 *
 * @category Class
 * @description The live comment class written on social media about related stream
 * @package  Thecodebunny\StreamingEngine
 * @author   TCB Codegen team
 * @link     https://github.com/tcb-api/tcb-codegen
 */
class LiveComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $tcbModelName = 'LiveComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $tcbTypes = [
        'id' => 'string',
        'message' => 'string',
        'from' => '\Thecodebunny\StreamingEngine\Model\User',
        'origin' => 'string',
        'timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $tcbFormats = [
        'id' => null,
        'message' => null,
        'from' => null,
        'origin' => null,
        'timestamp' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function tcbTypes()
    {
        return self::$tcbTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function tcbFormats()
    {
        return self::$tcbFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'message' => 'message',
        'from' => 'from',
        'origin' => 'origin',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'message' => 'setMessage',
        'from' => 'setFrom',
        'origin' => 'setOrigin',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'message' => 'getMessage',
        'from' => 'getFrom',
        'origin' => 'getOrigin',
        'timestamp' => 'getTimestamp'
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
        return self::$tcbModelName;
    }

    const ORIGIN_FACEBOOK = 'facebook';
    const ORIGIN_PERISCOPE = 'periscope';
    const ORIGIN_YOUTUBE = 'youtube';
    const ORIGIN_SERVER = 'server';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_FACEBOOK,
            self::ORIGIN_PERISCOPE,
            self::ORIGIN_YOUTUBE,
            self::ORIGIN_SERVER,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id the id of the comment
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message the content of the comment
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Thecodebunny\StreamingEngine\Model\User
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Thecodebunny\StreamingEngine\Model\User $from the owner of the comment
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin the origin of the comment
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($origin) && !in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp the timestamp of the stream
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

