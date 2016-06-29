<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRateReason implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateReason[] $RateReason
     */
    protected $RateReason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateReason[]
     */
    public function getRateReason()
    {
        return $this->RateReason;
    }

    /**
     * @param RateReason[] $RateReason
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRateReason
     */
    public function setRateReason(array $RateReason = null)
    {
        $this->RateReason = $RateReason;
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
        return isset($this->RateReason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateReason
     */
    public function offsetGet($offset)
    {
        return $this->RateReason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateReason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RateReason[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RateReason[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateReason Return the current element
     */
    public function current()
    {
        return current($this->RateReason);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RateReason);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RateReason);
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
        reset($this->RateReason);
    }

    /**
     * Countable implementation
     *
     * @return RateReason Return count of elements
     */
    public function count()
    {
        return count($this->RateReason);
    }
}
