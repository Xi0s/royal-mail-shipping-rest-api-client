<?php
/**
 * ShipmentsCancelResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V3 (REST)
 *
 * This API specification details the requirements for integrating with **Royal Mail API Shipping V3**.<br><br>It specifically covers how the Royal Mail API Shipping V3 can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.<br><br>Royal Mail API Shipping V3 exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail.<br><br>Built on industry standards, Royal Mail API Shipping V3 provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming and offline barcoding to allow customers greater flexibility when generating their labels. There are no costs to customers for using the Royal Mail API Shipping V3 services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.<br><br>This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating/ cancelling a shipment and Manifesting please refer to http://www.royalmail.com/pro-shipping-help.
 *
 * OpenAPI spec version: 3.0.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\models;

use \ArrayAccess;
use \RoyalMail\Shipping\Rest\Api\ObjectSerializer;

/**
 * ShipmentsCancelResponse Class Doc Comment
 *
 * @category Class
 * @description Response from a cancel shipments request.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentsCancelResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentsCancelResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentIds' => 'string[]',
'httpStatusCode' => 'int',
'httpStatusDescription' => 'string',
'message' => 'string',
'errors' => '\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentIds' => null,
'httpStatusCode' => 'int32',
'httpStatusDescription' => null,
'message' => null,
'errors' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipmentIds' => 'ShipmentIds',
'httpStatusCode' => 'HttpStatusCode',
'httpStatusDescription' => 'HttpStatusDescription',
'message' => 'Message',
'errors' => 'Errors'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentIds' => 'setShipmentIds',
'httpStatusCode' => 'setHttpStatusCode',
'httpStatusDescription' => 'setHttpStatusDescription',
'message' => 'setMessage',
'errors' => 'setErrors'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentIds' => 'getShipmentIds',
'httpStatusCode' => 'getHttpStatusCode',
'httpStatusDescription' => 'getHttpStatusDescription',
'message' => 'getMessage',
'errors' => 'getErrors'    ];

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
        return self::$swaggerModelName;
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
        $this->container['shipmentIds'] = isset($data['shipmentIds']) ? $data['shipmentIds'] : null;
        $this->container['httpStatusCode'] = isset($data['httpStatusCode']) ? $data['httpStatusCode'] : null;
        $this->container['httpStatusDescription'] = isset($data['httpStatusDescription']) ? $data['httpStatusDescription'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['httpStatusCode'] === null) {
            $invalidProperties[] = "'httpStatusCode' can't be null";
        }
        if ($this->container['httpStatusDescription'] === null) {
            $invalidProperties[] = "'httpStatusDescription' can't be null";
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
     * Gets shipmentIds
     *
     * @return string[]
     */
    public function getShipmentIds()
    {
        return $this->container['shipmentIds'];
    }

    /**
     * Sets shipmentIds
     *
     * @param string[] $shipmentIds Shipment Ids<br />Tracking Numbers / Unique Ids of each shipment involved in the request.
     *
     * @return $this
     */
    public function setShipmentIds($shipmentIds)
    {
        $this->container['shipmentIds'] = $shipmentIds;

        return $this;
    }

    /**
     * Gets httpStatusCode
     *
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->container['httpStatusCode'];
    }

    /**
     * Sets httpStatusCode
     *
     * @param int $httpStatusCode HTTP Status Code
     *
     * @return $this
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->container['httpStatusCode'] = $httpStatusCode;

        return $this;
    }

    /**
     * Gets httpStatusDescription
     *
     * @return string
     */
    public function getHttpStatusDescription()
    {
        return $this->container['httpStatusDescription'];
    }

    /**
     * Sets httpStatusDescription
     *
     * @param string $httpStatusDescription HTTP Status Description
     *
     * @return $this
     */
    public function setHttpStatusDescription($httpStatusDescription)
    {
        $this->container['httpStatusDescription'] = $httpStatusDescription;

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
     * @param string $message Message<br />Successful response may include a success message.<br />Failure responses will have general reason as to why. Further details may be contained in the list of errors.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ErrorDetail[] $errors Errors<br />Details about why a request failed.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
