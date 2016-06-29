<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomTypeBuildingsAndPL implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomTypeBuildingsAndPL[] $RoomTypeBuildingsAndPL
     */
    protected $RoomTypeBuildingsAndPL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeBuildingsAndPL[]
     */
    public function getRoomTypeBuildingsAndPL()
    {
        return $this->RoomTypeBuildingsAndPL;
    }

    /**
     * @param RoomTypeBuildingsAndPL[] $RoomTypeBuildingsAndPL
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomTypeBuildingsAndPL
     */
    public function setRoomTypeBuildingsAndPL(array $RoomTypeBuildingsAndPL = null)
    {
        $this->RoomTypeBuildingsAndPL = $RoomTypeBuildingsAndPL;
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
        return isset($this->RoomTypeBuildingsAndPL[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomTypeBuildingsAndPL
     */
    public function offsetGet($offset)
    {
        return $this->RoomTypeBuildingsAndPL[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomTypeBuildingsAndPL $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomTypeBuildingsAndPL[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomTypeBuildingsAndPL[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomTypeBuildingsAndPL Return the current element
     */
    public function current()
    {
        return current($this->RoomTypeBuildingsAndPL);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomTypeBuildingsAndPL);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomTypeBuildingsAndPL);
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
        reset($this->RoomTypeBuildingsAndPL);
    }

    /**
     * Countable implementation
     *
     * @return RoomTypeBuildingsAndPL Return count of elements
     */
    public function count()
    {
        return count($this->RoomTypeBuildingsAndPL);
    }
}
