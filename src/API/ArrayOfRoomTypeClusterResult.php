<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomTypeClusterResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomTypeClusterResult[] $RoomTypeClusterResult
     */
    protected $RoomTypeClusterResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeClusterResult[]
     */
    public function getRoomTypeClusterResult()
    {
        return $this->RoomTypeClusterResult;
    }

    /**
     * @param RoomTypeClusterResult[] $RoomTypeClusterResult
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomTypeClusterResult
     */
    public function setRoomTypeClusterResult(array $RoomTypeClusterResult = null)
    {
        $this->RoomTypeClusterResult = $RoomTypeClusterResult;
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
        return isset($this->RoomTypeClusterResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomTypeClusterResult
     */
    public function offsetGet($offset)
    {
        return $this->RoomTypeClusterResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomTypeClusterResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomTypeClusterResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomTypeClusterResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomTypeClusterResult Return the current element
     */
    public function current()
    {
        return current($this->RoomTypeClusterResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomTypeClusterResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomTypeClusterResult);
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
        reset($this->RoomTypeClusterResult);
    }

    /**
     * Countable implementation
     *
     * @return RoomTypeClusterResult Return count of elements
     */
    public function count()
    {
        return count($this->RoomTypeClusterResult);
    }
}
