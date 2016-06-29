<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomTypeCluster implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomTypeCluster[] $RoomTypeCluster
     */
    protected $RoomTypeCluster = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeCluster[]
     */
    public function getRoomTypeCluster()
    {
        return $this->RoomTypeCluster;
    }

    /**
     * @param RoomTypeCluster[] $RoomTypeCluster
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomTypeCluster
     */
    public function setRoomTypeCluster(array $RoomTypeCluster = null)
    {
        $this->RoomTypeCluster = $RoomTypeCluster;
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
        return isset($this->RoomTypeCluster[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomTypeCluster
     */
    public function offsetGet($offset)
    {
        return $this->RoomTypeCluster[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomTypeCluster $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomTypeCluster[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomTypeCluster[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomTypeCluster Return the current element
     */
    public function current()
    {
        return current($this->RoomTypeCluster);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomTypeCluster);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomTypeCluster);
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
        reset($this->RoomTypeCluster);
    }

    /**
     * Countable implementation
     *
     * @return RoomTypeCluster Return count of elements
     */
    public function count()
    {
        return count($this->RoomTypeCluster);
    }
}
