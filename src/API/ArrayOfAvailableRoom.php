<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfAvailableRoom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailableRoom[] $AvailableRoom
     */
    protected $AvailableRoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableRoom[]
     */
    public function getAvailableRoom()
    {
        return $this->AvailableRoom;
    }

    /**
     * @param AvailableRoom[] $AvailableRoom
     * @return \Gueststream\PMS\IQWare\API\ArrayOfAvailableRoom
     */
    public function setAvailableRoom(array $AvailableRoom = null)
    {
        $this->AvailableRoom = $AvailableRoom;
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
        return isset($this->AvailableRoom[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailableRoom
     */
    public function offsetGet($offset)
    {
        return $this->AvailableRoom[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailableRoom $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->AvailableRoom[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AvailableRoom[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableRoom Return the current element
     */
    public function current()
    {
        return current($this->AvailableRoom);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailableRoom);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailableRoom);
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
        reset($this->AvailableRoom);
    }

    /**
     * Countable implementation
     *
     * @return AvailableRoom Return count of elements
     */
    public function count()
    {
        return count($this->AvailableRoom);
    }
}
