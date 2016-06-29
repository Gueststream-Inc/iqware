<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomAttributGrouping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomAttributGrouping[] $RoomAttributGrouping
     */
    protected $RoomAttributGrouping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomAttributGrouping[]
     */
    public function getRoomAttributGrouping()
    {
        return $this->RoomAttributGrouping;
    }

    /**
     * @param RoomAttributGrouping[] $RoomAttributGrouping
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomAttributGrouping
     */
    public function setRoomAttributGrouping(array $RoomAttributGrouping = null)
    {
        $this->RoomAttributGrouping = $RoomAttributGrouping;
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
        return isset($this->RoomAttributGrouping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomAttributGrouping
     */
    public function offsetGet($offset)
    {
        return $this->RoomAttributGrouping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomAttributGrouping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomAttributGrouping[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomAttributGrouping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomAttributGrouping Return the current element
     */
    public function current()
    {
        return current($this->RoomAttributGrouping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomAttributGrouping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomAttributGrouping);
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
        reset($this->RoomAttributGrouping);
    }

    /**
     * Countable implementation
     *
     * @return RoomAttributGrouping Return count of elements
     */
    public function count()
    {
        return count($this->RoomAttributGrouping);
    }
}
