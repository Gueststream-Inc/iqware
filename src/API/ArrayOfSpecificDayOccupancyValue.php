<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSpecificDayOccupancyValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SpecificDayOccupancyValue[] $SpecificDayOccupancyValue
     */
    protected $SpecificDayOccupancyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SpecificDayOccupancyValue[]
     */
    public function getSpecificDayOccupancyValue()
    {
        return $this->SpecificDayOccupancyValue;
    }

    /**
     * @param SpecificDayOccupancyValue[] $SpecificDayOccupancyValue
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSpecificDayOccupancyValue
     */
    public function setSpecificDayOccupancyValue(array $SpecificDayOccupancyValue = null)
    {
        $this->SpecificDayOccupancyValue = $SpecificDayOccupancyValue;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->SpecificDayOccupancyValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SpecificDayOccupancyValue
     */
    public function offsetGet($offset)
    {
        return $this->SpecificDayOccupancyValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SpecificDayOccupancyValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SpecificDayOccupancyValue[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SpecificDayOccupancyValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SpecificDayOccupancyValue Return the current element
     */
    public function current()
    {
        return current($this->SpecificDayOccupancyValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SpecificDayOccupancyValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SpecificDayOccupancyValue);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->SpecificDayOccupancyValue);
    }

    /**
     * Countable implementation
     *
     * @return SpecificDayOccupancyValue Return count of elements
     */
    public function count()
    {
        return count($this->SpecificDayOccupancyValue);
    }
}
