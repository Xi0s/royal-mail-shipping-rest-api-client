<?php
/**
 * ShipmentsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V2 (REST)
 *
 * This API specification details the requirements for integrating with Royal Mail API Shipping V2 (REST). It specifically covers how the Royal Mail API Shipping V2 (REST) can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V2 (REST) exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail API Shipping V2 (REST) provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming and offline barcoding to allow customers greater flexibility when generating their labels.  There are no costs to customers for using the Royal Mail API Shipping V2 (REST) services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating cancelling a shipment and manifesting click here&#58; www.royalmail.com/pro-shipping-help
 *
 * OpenAPI spec version: 1.0.21
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
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
 * ShipmentsRequest Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipmentsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentType' => 'string',
        'service' => '\RoyalMail\Shipping\Rest\Api\models\Service',
        'bfpoCode' => 'string',
        'shippingDate' => 'string',
        'items' => '\RoyalMail\Shipping\Rest\Api\models\ShipmentRequestItemInternational[]',
        'recipientContact' => '\RoyalMail\Shipping\Rest\Api\models\Contact',
        'recipientAddress' => '\RoyalMail\Shipping\Rest\Api\models\Address',
        'senderReference' => 'string',
        'departmentReference' => 'string',
        'customerReference' => 'string',
        'safePlace' => 'string',
        'internationalInfo' => '\RoyalMail\Shipping\Rest\Api\models\InternationalInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentType' => null,
        'service' => null,
        'bfpoCode' => null,
        'shippingDate' => null,
        'items' => null,
        'recipientContact' => null,
        'recipientAddress' => null,
        'senderReference' => null,
        'departmentReference' => null,
        'customerReference' => null,
        'safePlace' => null,
        'internationalInfo' => null
    ];

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
        'shipmentType' => 'shipmentType',
        'service' => 'service',
        'bfpoCode' => 'bfpoCode',
        'shippingDate' => 'shippingDate',
        'items' => 'items',
        'recipientContact' => 'recipientContact',
        'recipientAddress' => 'recipientAddress',
        'senderReference' => 'senderReference',
        'departmentReference' => 'departmentReference',
        'customerReference' => 'customerReference',
        'safePlace' => 'safePlace',
        'internationalInfo' => 'internationalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentType' => 'setShipmentType',
        'service' => 'setService',
        'bfpoCode' => 'setBfpoCode',
        'shippingDate' => 'setShippingDate',
        'items' => 'setItems',
        'recipientContact' => 'setRecipientContact',
        'recipientAddress' => 'setRecipientAddress',
        'senderReference' => 'setSenderReference',
        'departmentReference' => 'setDepartmentReference',
        'customerReference' => 'setCustomerReference',
        'safePlace' => 'setSafePlace',
        'internationalInfo' => 'setInternationalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentType' => 'getShipmentType',
        'service' => 'getService',
        'bfpoCode' => 'getBfpoCode',
        'shippingDate' => 'getShippingDate',
        'items' => 'getItems',
        'recipientContact' => 'getRecipientContact',
        'recipientAddress' => 'getRecipientAddress',
        'senderReference' => 'getSenderReference',
        'departmentReference' => 'getDepartmentReference',
        'customerReference' => 'getCustomerReference',
        'safePlace' => 'getSafePlace',
        'internationalInfo' => 'getInternationalInfo'
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
        $this->container['shipmentType'] = isset($data['shipmentType']) ? $data['shipmentType'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['bfpoCode'] = isset($data['bfpoCode']) ? $data['bfpoCode'] : null;
        $this->container['shippingDate'] = isset($data['shippingDate']) ? $data['shippingDate'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['recipientContact'] = isset($data['recipientContact']) ? $data['recipientContact'] : null;
        $this->container['recipientAddress'] = isset($data['recipientAddress']) ? $data['recipientAddress'] : null;
        $this->container['senderReference'] = isset($data['senderReference']) ? $data['senderReference'] : null;
        $this->container['departmentReference'] = isset($data['departmentReference']) ? $data['departmentReference'] : null;
        $this->container['customerReference'] = isset($data['customerReference']) ? $data['customerReference'] : null;
        $this->container['safePlace'] = isset($data['safePlace']) ? $data['safePlace'] : null;
        $this->container['internationalInfo'] = isset($data['internationalInfo']) ? $data['internationalInfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentType'] === null) {
            $invalidProperties[] = "'shipmentType' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['recipientContact'] === null) {
            $invalidProperties[] = "'recipientContact' can't be null";
        }
        if ($this->container['recipientAddress'] === null) {
            $invalidProperties[] = "'recipientAddress' can't be null";
        }
        if ($this->container['internationalInfo'] === null) {
            $invalidProperties[] = "'internationalInfo' can't be null";
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
     * Gets shipmentType
     *
     * @return string
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param string $shipmentType Specifies whether the shipment being created is a standard delivery service or a returns service. Accepted values are ‘Delivery’ and ‘Return’. Please note that this field is not case sensitive.
     *
     * @return $this
     */
    public function setShipmentType($shipmentType)
    {
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Service
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Service $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets bfpoCode
     *
     * @return string
     */
    public function getBfpoCode()
    {
        return $this->container['bfpoCode'];
    }

    /**
     * Sets bfpoCode
     *
     * @param string $bfpoCode For HM Forces (BFPO) Service Type only when the Service Format is not International Flat, International Letter or International Packet. For the list of permissible values, please go to API Shipping V2 page on the Royal Mail API (Developer) Portal and refer to API Shipping Reference Data.
     *
     * @return $this
     */
    public function setBfpoCode($bfpoCode)
    {
        $this->container['bfpoCode'] = $bfpoCode;

        return $this;
    }

    /**
     * Gets shippingDate
     *
     * @return string
     */
    public function getShippingDate()
    {
        return $this->container['shippingDate'];
    }

    /**
     * Sets shippingDate
     *
     * @param string $shippingDate This is the date that the item will be physically sent (in the format YYYY-MM-DD). This may be up to 28 days in the future. Please note that for returns a Shipping date must be provided.
     *
     * @return $this
     */
    public function setShippingDate($shippingDate)
    {
        $this->container['shippingDate'] = $shippingDate;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ShipmentRequestItemInternational[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ShipmentRequestItemInternational[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets recipientContact
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Contact
     */
    public function getRecipientContact()
    {
        return $this->container['recipientContact'];
    }

    /**
     * Sets recipientContact
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Contact $recipientContact recipientContact
     *
     * @return $this
     */
    public function setRecipientContact($recipientContact)
    {
        $this->container['recipientContact'] = $recipientContact;

        return $this;
    }

    /**
     * Gets recipientAddress
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Address
     */
    public function getRecipientAddress()
    {
        return $this->container['recipientAddress'];
    }

    /**
     * Sets recipientAddress
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Address $recipientAddress recipientAddress
     *
     * @return $this
     */
    public function setRecipientAddress($recipientAddress)
    {
        $this->container['recipientAddress'] = $recipientAddress;

        return $this;
    }

    /**
     * Gets senderReference
     *
     * @return string
     */
    public function getSenderReference()
    {
        return $this->container['senderReference'];
    }

    /**
     * Sets senderReference
     *
     * @param string $senderReference This field allows the user to supply their own reference number. Where supported (e.g. Tracked Returns) this number will appear on the label.
     *
     * @return $this
     */
    public function setSenderReference($senderReference)
    {
        $this->container['senderReference'] = $senderReference;

        return $this;
    }

    /**
     * Gets departmentReference
     *
     * @return string
     */
    public function getDepartmentReference()
    {
        return $this->container['departmentReference'];
    }

    /**
     * Sets departmentReference
     *
     * @param string $departmentReference This is the department reference code that customers can define in OBA.
     *
     * @return $this
     */
    public function setDepartmentReference($departmentReference)
    {
        $this->container['departmentReference'] = $departmentReference;

        return $this;
    }

    /**
     * Gets customerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customerReference'];
    }

    /**
     * Sets customerReference
     *
     * @param string $customerReference This field allows customers to supply a reference that applies to multiple shipments and is included to mirror the functionality offered by the Customer Reference field in OBA, whereby a reference can be associated to a group of items. For references that apply to a single shipment, the senderReference field should be used. **Warning** Misuse of this field may result in incorrect billing.
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->container['customerReference'] = $customerReference;

        return $this;
    }

    /**
     * Gets safePlace
     *
     * @return string
     */
    public function getSafePlace()
    {
        return $this->container['safePlace'];
    }

    /**
     * Sets safePlace
     *
     * @param string $safePlace For Tracked non-signature service offerings only; this field allows a string that gives details of the recipient's designated safeplace (e.g. “inside the porch”).
     *
     * @return $this
     */
    public function setSafePlace($safePlace)
    {
        $this->container['safePlace'] = $safePlace;

        return $this;
    }

    /**
     * Gets internationalInfo
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\InternationalInfo
     */
    public function getInternationalInfo()
    {
        return $this->container['internationalInfo'];
    }

    /**
     * Sets internationalInfo
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\InternationalInfo $internationalInfo internationalInfo
     *
     * @return $this
     */
    public function setInternationalInfo($internationalInfo)
    {
        $this->container['internationalInfo'] = $internationalInfo;

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
