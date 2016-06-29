<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfBreakdownByDay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BreakdownByDay[] $BreakdownByDay
     */
    protected $BreakdownByDay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BreakdownByDay[]
     */
    public function getBreakdownByDay()
    {
        return $this->BreakdownByDay;
    }

    /**
     * @param BreakdownByDay[] $BreakdownByDay
     * @return \Gueststream\PMS\IQWare\API\ArrayOfBreakdownByDay
     */
    public function setBreakdownByDay(array $BreakdownByDay = null)
    {
        $this->BreakdownByDay = $BreakdownByDay;
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
        return isset($this->BreakdownByDay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BreakdownByDay
     */
    public function offsetGet($offset)
    {
        return $this->BreakdownByDay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BreakdownByDay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->BreakdownByDay[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->BreakdownByDay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BreakdownByDay Return the current element
     */
    public function current()
    {
        return current($this->BreakdownByDay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->BreakdownByDay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->BreakdownByDay);
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
        reset($this->BreakdownByDay);
    }

    /**
     * Countable implementation
     *
     * @return BreakdownByDay Return count of elements
     */
    public function count()
    {
        return count($this->BreakdownByDay);
    }
}
