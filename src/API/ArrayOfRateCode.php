<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRateCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateCode[] $RateCode
     */
    protected $RateCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateCode[]
     */
    public function getRateCode()
    {
        return $this->RateCode;
    }

    /**
     * @param RateCode[] $RateCode
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRateCode
     */
    public function setRateCode(array $RateCode = null)
    {
        $this->RateCode = $RateCode;
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
        return isset($this->RateCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateCode
     */
    public function offsetGet($offset)
    {
        return $this->RateCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RateCode[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RateCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateCode Return the current element
     */
    public function current()
    {
        return current($this->RateCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RateCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RateCode);
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
        reset($this->RateCode);
    }

    /**
     * Countable implementation
     *
     * @return RateCode Return count of elements
     */
    public function count()
    {
        return count($this->RateCode);
    }
}
