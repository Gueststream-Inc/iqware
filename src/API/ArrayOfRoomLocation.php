<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomLocation[] $RoomLocation
     */
    protected $RoomLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomLocation[]
     */
    public function getRoomLocation()
    {
        return $this->RoomLocation;
    }

    /**
     * @param RoomLocation[] $RoomLocation
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomLocation
     */
    public function setRoomLocation(array $RoomLocation = null)
    {
        $this->RoomLocation = $RoomLocation;
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
        return isset($this->RoomLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomLocation
     */
    public function offsetGet($offset)
    {
        return $this->RoomLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomLocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomLocation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomLocation Return the current element
     */
    public function current()
    {
        return current($this->RoomLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomLocation);
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
        reset($this->RoomLocation);
    }

    /**
     * Countable implementation
     *
     * @return RoomLocation Return count of elements
     */
    public function count()
    {
        return count($this->RoomLocation);
    }
}
