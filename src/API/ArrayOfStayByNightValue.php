<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfStayByNightValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StayByNightValue[] $StayByNightValue
     */
    protected $StayByNightValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StayByNightValue[]
     */
    public function getStayByNightValue()
    {
        return $this->StayByNightValue;
    }

    /**
     * @param StayByNightValue[] $StayByNightValue
     * @return \Gueststream\PMS\IQWare\API\ArrayOfStayByNightValue
     */
    public function setStayByNightValue(array $StayByNightValue = null)
    {
        $this->StayByNightValue = $StayByNightValue;
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
        return isset($this->StayByNightValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StayByNightValue
     */
    public function offsetGet($offset)
    {
        return $this->StayByNightValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StayByNightValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->StayByNightValue[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->StayByNightValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StayByNightValue Return the current element
     */
    public function current()
    {
        return current($this->StayByNightValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->StayByNightValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->StayByNightValue);
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
        reset($this->StayByNightValue);
    }

    /**
     * Countable implementation
     *
     * @return StayByNightValue Return count of elements
     */
    public function count()
    {
        return count($this->StayByNightValue);
    }
}
