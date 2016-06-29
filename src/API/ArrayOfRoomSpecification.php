<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomSpecification implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomSpecification[] $RoomSpecification
     */
    protected $RoomSpecification = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomSpecification[]
     */
    public function getRoomSpecification()
    {
        return $this->RoomSpecification;
    }

    /**
     * @param RoomSpecification[] $RoomSpecification
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomSpecification
     */
    public function setRoomSpecification(array $RoomSpecification = null)
    {
        $this->RoomSpecification = $RoomSpecification;
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
        return isset($this->RoomSpecification[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomSpecification
     */
    public function offsetGet($offset)
    {
        return $this->RoomSpecification[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomSpecification $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomSpecification[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomSpecification[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomSpecification Return the current element
     */
    public function current()
    {
        return current($this->RoomSpecification);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomSpecification);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomSpecification);
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
        reset($this->RoomSpecification);
    }

    /**
     * Countable implementation
     *
     * @return RoomSpecification Return count of elements
     */
    public function count()
    {
        return count($this->RoomSpecification);
    }
}
