<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfUnitAvailabilityCalendar implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitAvailabilityCalendar[] $UnitAvailabilityCalendar
     */
    protected $UnitAvailabilityCalendar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitAvailabilityCalendar[]
     */
    public function getUnitAvailabilityCalendar()
    {
        return $this->UnitAvailabilityCalendar;
    }

    /**
     * @param UnitAvailabilityCalendar[] $UnitAvailabilityCalendar
     * @return \Gueststream\PMS\IQWare\API\ArrayOfUnitAvailabilityCalendar
     */
    public function setUnitAvailabilityCalendar(array $UnitAvailabilityCalendar = null)
    {
        $this->UnitAvailabilityCalendar = $UnitAvailabilityCalendar;
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
        return isset($this->UnitAvailabilityCalendar[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitAvailabilityCalendar
     */
    public function offsetGet($offset)
    {
        return $this->UnitAvailabilityCalendar[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitAvailabilityCalendar $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->UnitAvailabilityCalendar[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->UnitAvailabilityCalendar[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitAvailabilityCalendar Return the current element
     */
    public function current()
    {
        return current($this->UnitAvailabilityCalendar);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UnitAvailabilityCalendar);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UnitAvailabilityCalendar);
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
        reset($this->UnitAvailabilityCalendar);
    }

    /**
     * Countable implementation
     *
     * @return UnitAvailabilityCalendar Return count of elements
     */
    public function count()
    {
        return count($this->UnitAvailabilityCalendar);
    }
}
