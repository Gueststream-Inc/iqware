<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfStayDailyValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StayDailyValue[] $StayDailyValue
     */
    protected $StayDailyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StayDailyValue[]
     */
    public function getStayDailyValue()
    {
        return $this->StayDailyValue;
    }

    /**
     * @param StayDailyValue[] $StayDailyValue
     * @return \Gueststream\PMS\IQWare\API\ArrayOfStayDailyValue
     */
    public function setStayDailyValue(array $StayDailyValue = null)
    {
        $this->StayDailyValue = $StayDailyValue;
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
        return isset($this->StayDailyValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StayDailyValue
     */
    public function offsetGet($offset)
    {
        return $this->StayDailyValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StayDailyValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->StayDailyValue[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->StayDailyValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StayDailyValue Return the current element
     */
    public function current()
    {
        return current($this->StayDailyValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->StayDailyValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->StayDailyValue);
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
        reset($this->StayDailyValue);
    }

    /**
     * Countable implementation
     *
     * @return StayDailyValue Return count of elements
     */
    public function count()
    {
        return count($this->StayDailyValue);
    }
}
