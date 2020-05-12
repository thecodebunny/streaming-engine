<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thecodebunny\StreamingEngine\Model
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

/**
 * Interface abstracting model access.
 *
 * @package Thecodebunny\StreamingEngine\Model
 * @author  TCB Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function tcbTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function tcbFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
