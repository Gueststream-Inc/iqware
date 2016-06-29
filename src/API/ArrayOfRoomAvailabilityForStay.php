<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomAvailabilityForStay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomAvailabilityForStay[] $RoomAvailabilityForStay
     */
    protected $RoomAvailabilityForStay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomAvailabilityForStay[]
     */
    public function getRoomAvailabilityForStay()
    {
        return $this->RoomAvailabilityForStay;
    }

    /**
     * @param RoomAvailabilityForStay[] $RoomAvailabilityForStay
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomAvailabilityForStay
     */
    public function setRoomAvailabilityForStay(array $RoomAvailabilityForStay = null)
    {
        $this->RoomAvailabilityForStay = $RoomAvailabilityForStay;
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
        return isset($this->RoomAvailabilityForStay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomAvailabilityForStay
     */
    public function offsetGet($offset)
    {
        return $this->RoomAvailabilityForStay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomAvailabilityForStay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomAvailabilityForStay[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomAvailabilityForStay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomAvailabilityForStay Return the current element
     */
    public function current()
    {
        return current($this->RoomAvailabilityForStay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomAvailabilityForStay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomAvailabilityForStay);
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
        reset($this->RoomAvailabilityForStay);
    }

    /**
     * Countable implementation
     *
     * @return RoomAvailabilityForStay Return count of elements
     */
    public function count()
    {
        return count($this->RoomAvailabilityForStay);
    }
}
