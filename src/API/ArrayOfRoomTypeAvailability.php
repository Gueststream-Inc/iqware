<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomTypeAvailability implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomTypeAvailability[] $RoomTypeAvailability
     */
    protected $RoomTypeAvailability = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeAvailability[]
     */
    public function getRoomTypeAvailability()
    {
        return $this->RoomTypeAvailability;
    }

    /**
     * @param RoomTypeAvailability[] $RoomTypeAvailability
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomTypeAvailability
     */
    public function setRoomTypeAvailability(array $RoomTypeAvailability = null)
    {
        $this->RoomTypeAvailability = $RoomTypeAvailability;
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
        return isset($this->RoomTypeAvailability[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomTypeAvailability
     */
    public function offsetGet($offset)
    {
        return $this->RoomTypeAvailability[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomTypeAvailability $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomTypeAvailability[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomTypeAvailability[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomTypeAvailability Return the current element
     */
    public function current()
    {
        return current($this->RoomTypeAvailability);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomTypeAvailability);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomTypeAvailability);
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
        reset($this->RoomTypeAvailability);
    }

    /**
     * Countable implementation
     *
     * @return RoomTypeAvailability Return count of elements
     */
    public function count()
    {
        return count($this->RoomTypeAvailability);
    }
}
