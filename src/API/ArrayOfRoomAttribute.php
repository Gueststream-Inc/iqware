<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomAttribute implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomAttribute[] $RoomAttribute
     */
    protected $RoomAttribute = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomAttribute[]
     */
    public function getRoomAttribute()
    {
        return $this->RoomAttribute;
    }

    /**
     * @param RoomAttribute[] $RoomAttribute
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomAttribute
     */
    public function setRoomAttribute(array $RoomAttribute = null)
    {
        $this->RoomAttribute = $RoomAttribute;
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
        return isset($this->RoomAttribute[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomAttribute
     */
    public function offsetGet($offset)
    {
        return $this->RoomAttribute[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomAttribute $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomAttribute[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomAttribute[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomAttribute Return the current element
     */
    public function current()
    {
        return current($this->RoomAttribute);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomAttribute);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomAttribute);
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
        reset($this->RoomAttribute);
    }

    /**
     * Countable implementation
     *
     * @return RoomAttribute Return count of elements
     */
    public function count()
    {
        return count($this->RoomAttribute);
    }
}
