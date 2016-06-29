<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDateTime implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var dateTime[] $dateTime
     */
    protected $dateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dateTime[]
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param dateTime[] $dateTime
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDateTime
     */
    public function setDateTime(array $dateTime = null)
    {
        $this->dateTime = $dateTime;
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
        return isset($this->dateTime[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return dateTime
     */
    public function offsetGet($offset)
    {
        return $this->dateTime[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param dateTime $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->dateTime[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->dateTime[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return dateTime Return the current element
     */
    public function current()
    {
        return current($this->dateTime);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->dateTime);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->dateTime);
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
        reset($this->dateTime);
    }

    /**
     * Countable implementation
     *
     * @return dateTime Return count of elements
     */
    public function count()
    {
        return count($this->dateTime);
    }
}
