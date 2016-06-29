<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfStayValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StayValue[] $StayValue
     */
    protected $StayValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StayValue[]
     */
    public function getStayValue()
    {
        return $this->StayValue;
    }

    /**
     * @param StayValue[] $StayValue
     * @return \Gueststream\PMS\IQWare\API\ArrayOfStayValue
     */
    public function setStayValue(array $StayValue = null)
    {
        $this->StayValue = $StayValue;
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
        return isset($this->StayValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StayValue
     */
    public function offsetGet($offset)
    {
        return $this->StayValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StayValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->StayValue[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->StayValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StayValue Return the current element
     */
    public function current()
    {
        return current($this->StayValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->StayValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->StayValue);
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
        reset($this->StayValue);
    }

    /**
     * Countable implementation
     *
     * @return StayValue Return count of elements
     */
    public function count()
    {
        return count($this->StayValue);
    }
}
