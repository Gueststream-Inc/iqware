<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomTypeBreakdown implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomTypeBreakdown[] $RoomTypeBreakdown
     */
    protected $RoomTypeBreakdown = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeBreakdown[]
     */
    public function getRoomTypeBreakdown()
    {
        return $this->RoomTypeBreakdown;
    }

    /**
     * @param RoomTypeBreakdown[] $RoomTypeBreakdown
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomTypeBreakdown
     */
    public function setRoomTypeBreakdown(array $RoomTypeBreakdown = null)
    {
        $this->RoomTypeBreakdown = $RoomTypeBreakdown;
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
        return isset($this->RoomTypeBreakdown[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomTypeBreakdown
     */
    public function offsetGet($offset)
    {
        return $this->RoomTypeBreakdown[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomTypeBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomTypeBreakdown[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomTypeBreakdown[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomTypeBreakdown Return the current element
     */
    public function current()
    {
        return current($this->RoomTypeBreakdown);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomTypeBreakdown);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomTypeBreakdown);
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
        reset($this->RoomTypeBreakdown);
    }

    /**
     * Countable implementation
     *
     * @return RoomTypeBreakdown Return count of elements
     */
    public function count()
    {
        return count($this->RoomTypeBreakdown);
    }
}
