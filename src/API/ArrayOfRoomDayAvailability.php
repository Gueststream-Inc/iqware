<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomDayAvailability implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomDayAvailability[] $RoomDayAvailability
     */
    protected $RoomDayAvailability = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomDayAvailability[]
     */
    public function getRoomDayAvailability()
    {
        return $this->RoomDayAvailability;
    }

    /**
     * @param RoomDayAvailability[] $RoomDayAvailability
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomDayAvailability
     */
    public function setRoomDayAvailability(array $RoomDayAvailability = null)
    {
        $this->RoomDayAvailability = $RoomDayAvailability;
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
        return isset($this->RoomDayAvailability[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomDayAvailability
     */
    public function offsetGet($offset)
    {
        return $this->RoomDayAvailability[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomDayAvailability $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomDayAvailability[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomDayAvailability[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomDayAvailability Return the current element
     */
    public function current()
    {
        return current($this->RoomDayAvailability);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomDayAvailability);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomDayAvailability);
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
        reset($this->RoomDayAvailability);
    }

    /**
     * Countable implementation
     *
     * @return RoomDayAvailability Return count of elements
     */
    public function count()
    {
        return count($this->RoomDayAvailability);
    }
}
