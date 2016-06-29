<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRoomCalendar implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomCalendar[] $RoomCalendar
     */
    protected $RoomCalendar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomCalendar[]
     */
    public function getRoomCalendar()
    {
        return $this->RoomCalendar;
    }

    /**
     * @param RoomCalendar[] $RoomCalendar
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRoomCalendar
     */
    public function setRoomCalendar(array $RoomCalendar = null)
    {
        $this->RoomCalendar = $RoomCalendar;
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
        return isset($this->RoomCalendar[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomCalendar
     */
    public function offsetGet($offset)
    {
        return $this->RoomCalendar[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomCalendar $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RoomCalendar[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RoomCalendar[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomCalendar Return the current element
     */
    public function current()
    {
        return current($this->RoomCalendar);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RoomCalendar);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RoomCalendar);
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
        reset($this->RoomCalendar);
    }

    /**
     * Countable implementation
     *
     * @return RoomCalendar Return count of elements
     */
    public function count()
    {
        return count($this->RoomCalendar);
    }
}
