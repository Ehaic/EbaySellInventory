<?php
/**
 * Availability
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Inventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.11.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Inventory\Model;

use \ArrayAccess;
use \eBay\Sell\Inventory\ObjectSerializer;

/**
 * Availability Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the quantity of the inventory item that is available for purchase if the item will be shipped to the buyer, and the quantity of the inventory item that is available for In-Store Pickup at one or more of the merchant&#39;s physical stores. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
 * @package  eBay\Sell\Inventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Availability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Availability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pickup_at_location_availability' => '\eBay\Sell\Inventory\Model\PickupAtLocationAvailability[]',
        'ship_to_location_availability' => '\eBay\Sell\Inventory\Model\ShipToLocationAvailability'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pickup_at_location_availability' => null,
        'ship_to_location_availability' => null
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
        'pickup_at_location_availability' => 'pickupAtLocationAvailability',
        'ship_to_location_availability' => 'shipToLocationAvailability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_at_location_availability' => 'setPickupAtLocationAvailability',
        'ship_to_location_availability' => 'setShipToLocationAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_at_location_availability' => 'getPickupAtLocationAvailability',
        'ship_to_location_availability' => 'getShipToLocationAvailability'
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
        $this->container['pickup_at_location_availability'] = $data['pickup_at_location_availability'] ?? null;
        $this->container['ship_to_location_availability'] = $data['ship_to_location_availability'] ?? null;
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
     * Gets pickup_at_location_availability
     *
     * @return \eBay\Sell\Inventory\Model\PickupAtLocationAvailability[]|null
     */
    public function getPickupAtLocationAvailability()
    {
        return $this->container['pickup_at_location_availability'];
    }

    /**
     * Sets pickup_at_location_availability
     *
     * @param \eBay\Sell\Inventory\Model\PickupAtLocationAvailability[]|null $pickup_at_location_availability This container consists of an array of one or more of the merchant's physical store locations where the inventory item is available for In-Store Pickup orders. The merchant's location, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order takes place) are all in this container. In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
     *
     * @return self
     */
    public function setPickupAtLocationAvailability($pickup_at_location_availability)
    {
        $this->container['pickup_at_location_availability'] = $pickup_at_location_availability;

        return $this;
    }

    /**
     * Gets ship_to_location_availability
     *
     * @return \eBay\Sell\Inventory\Model\ShipToLocationAvailability|null
     */
    public function getShipToLocationAvailability()
    {
        return $this->container['ship_to_location_availability'];
    }

    /**
     * Sets ship_to_location_availability
     *
     * @param \eBay\Sell\Inventory\Model\ShipToLocationAvailability|null $ship_to_location_availability ship_to_location_availability
     *
     * @return self
     */
    public function setShipToLocationAvailability($ship_to_location_availability)
    {
        $this->container['ship_to_location_availability'] = $ship_to_location_availability;

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


