<?php
/**
 * Parcel
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
 * InternationalInfo Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InternationalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'internationalInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parcels'                  => '\RoyalMail\Shipping\Rest\Api\models\Parcel[]',
        'shipperExporterVatNo'     => 'string',
        'recipientImportersVatNo'  => 'string',
        'originalExportShipmentNo' => 'string',
        'documentsOnly'            => 'boolean',
        'shipmentDescription'      => 'string',
        'comments'                 => 'string',
        'invoiceDate'              => 'string',
        'termsOfDelivery'          => 'string',
        'purchaseOrderRef'         => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parcels'                  => null,
        'shipperExporterVatNo'     => null,
        'recipientImportersVatNo'  => null,
        'originalExportShipmentNo' => null,
        'documentsOnly'            => null,
        'shipmentDescription'      => null,
        'comments'                 => null,
        'invoiceDate'              => null,
        'termsOfDelivery'          => null,
        'purchaseOrderRef'         => null,
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
        'parcels'                  => 'parcels',
        'shipperExporterVatNo'     => 'shipperExporterVatNo',
        'recipientImportersVatNo'  => 'recipientImportersVatNo',
        'originalExportShipmentNo' => 'originalExportShipmentNo',
        'documentsOnly'            => 'documentsOnly',
        'shipmentDescription'      => 'shipmentDescription',
        'comments'                 => 'comments',
        'invoiceDate'              => 'invoiceDate',
        'termsOfDelivery'          => 'termsOfDelivery',
        'purchaseOrderRef'         => 'purchaseOrderRef',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parcels'                  => 'setParcels',
        'shipperExporterVatNo'     => 'setShipperExporterVatNo',
        'recipientImportersVatNo'  => 'setRecipientImportersVatNo',
        'originalExportShipmentNo' => 'setOriginalExportShipmentNo',
        'documentsOnly'            => 'setDocumentsOnly',
        'shipmentDescription'      => 'setShipmentDescription',
        'comments'                 => 'setComments',
        'invoiceDate'              => 'setInvoiceDate',
        'termsOfDelivery'          => 'setTermsOfDelivery',
        'purchaseOrderRef'         => 'setPurchaseOrderRef',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parcels'                  => 'getParcels',
        'shipperExporterVatNo'     => 'getShipperExporterVatNo',
        'recipientImportersVatNo'  => 'getRecipientImportersVatNo',
        'originalExportShipmentNo' => 'getOriginalExportShipmentNo',
        'documentsOnly'            => 'getDocumentsOnly',
        'shipmentDescription'      => 'getShipmentDescription',
        'comments'                 => 'getComments',
        'invoiceDate'              => 'getInvoiceDate',
        'termsOfDelivery'          => 'getTermsOfDelivery',
        'purchaseOrderRef'         => 'getPurchaseOrderRef',
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
        $this->container['parcels'] = isset($data['parcels']) ? $data['parcels'] : null;
        $this->container['shipperExporterVatNo'] = isset($data['shipperExporterVatNo']) ? $data['shipperExporterVatNo'] : null;
        $this->container['recipientImportersVatNo'] = isset($data['recipientImportersVatNo']) ? $data['recipientImportersVatNo'] : null;
        $this->container['originalExportShipmentNo'] = isset($data['originalExportShipmentNo']) ? $data['originalExportShipmentNo'] : null;
        $this->container['documentsOnly'] = isset($data['documentsOnly']) ? $data['documentsOnly'] : null;
        $this->container['shipmentDescription'] = isset($data['shipmentDescription']) ? $data['shipmentDescription'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['invoiceDate'] = isset($data['invoiceDate']) ? $data['invoiceDate'] : null;
        $this->container['termsOfDelivery'] = isset($data['termsOfDelivery']) ? $data['termsOfDelivery'] : null;
        $this->container['purchaseOrderRef'] = isset($data['purchaseOrderRef']) ? $data['purchaseOrderRef'] : null;
    }
    
    
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
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
    
    public function setParcels($parcels) { $this->container['parcels'] = $parcels; return $this; }
    public function setShipperExporterVatNo($shipperExporterVatNo) { $this->container['shipperExporterVatNo'] = $shipperExporterVatNo; return $this; }
    public function setRecipientImportersVatNo($recipientImportersVatNo) { $this->container['recipientImportersVatNo'] = $recipientImportersVatNo; return $this; }
    public function setOriginalExportShipmentNo($originalExportShipmentNo) { $this->container['originalExportShipmentNo'] = $originalExportShipmentNo; return $this; }
    public function setDocumentsOnly($documentsOnly) { $this->container['documentsOnly'] = $documentsOnly; return $this; }
    public function setShipmentDescription($shipmentDescription) { $this->container['shipmentDescription'] = $shipmentDescription; return $this; }
    public function setComments($comments) { $this->container['comments'] = $comments; return $this; }
    public function setInvoiceDate($invoiceDate) { $this->container['invoiceDate'] = $invoiceDate; return $this; }
    public function setTermsOfDelivery($termsOfDelivery) { $this->container['termsOfDelivery'] = $termsOfDelivery; return $this; }
    public function setPurchaseOrderRef($purchaseOrderRef) { $this->container['purchaseOrderRef'] = $purchaseOrderRef; return $this; }

     public function getParcels() { return $this->container['parcels']; }
     public function getShipperExporterVatNo() { return $this->container['shipperExporterVatNo']; }
     public function getRecipientImportersVatNo() { return $this->container['recipientImportersVatNo']; }
     public function getOriginalExportShipmentNo() { return $this->container['originalExportShipmentNo']; }
     public function getDocumentsOnly() { return $this->container['documentsOnly']; }
     public function getShipmentDescription() { return $this->container['shipmentDescription']; }
     public function getComments() { return $this->container['comments']; }
     public function getInvoiceDate() { return $this->container['invoiceDate']; }
     public function getTermsOfDelivery() { return $this->container['termsOfDelivery']; }
     public function getPurchaseOrderRef() { return $this->container['purchaseOrderRef']; }

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
