<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomInventory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomInventory[] $RoomInventory
     */
    protected $RoomInventory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomInventory[]
     */
    public function getRoomInventory()
    {
        return $this->RoomInventory;
    }

    /**
     * @param RoomInventory[] $RoomInventory
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomInventory
     */
    public function setRoomInventory(array $RoomInventory = null)
    {
        $this->RoomInventory = $RoomInventory;
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
        return isset($this->RoomInventory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomInventory
     */
    public function offsetGet($offset)
    {
        return $this->RoomInventory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomInventory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomInventory[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomInventory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomInventory Return the current element
     */
    public function current()
    {
        return current($this->RoomInventory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomInventory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomInventory);
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
        reset($this->RoomInventory);
    }

    /**
     * Countable implementation
     *
     * @return RoomInventory Return count of elements
     */
    public function count()
    {
        return count($this->RoomInventory);
    }
}
