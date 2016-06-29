<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRateSpecialValidPeriod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateSpecialValidPeriod[] $RateSpecialValidPeriod
     */
    protected $RateSpecialValidPeriod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateSpecialValidPeriod[]
     */
    public function getRateSpecialValidPeriod()
    {
        return $this->RateSpecialValidPeriod;
    }

    /**
     * @param RateSpecialValidPeriod[] $RateSpecialValidPeriod
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRateSpecialValidPeriod
     */
    public function setRateSpecialValidPeriod(array $RateSpecialValidPeriod = null)
    {
        $this->RateSpecialValidPeriod = $RateSpecialValidPeriod;
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
        return isset($this->RateSpecialValidPeriod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateSpecialValidPeriod
     */
    public function offsetGet($offset)
    {
        return $this->RateSpecialValidPeriod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateSpecialValidPeriod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RateSpecialValidPeriod[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RateSpecialValidPeriod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateSpecialValidPeriod Return the current element
     */
    public function current()
    {
        return current($this->RateSpecialValidPeriod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RateSpecialValidPeriod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RateSpecialValidPeriod);
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
        reset($this->RateSpecialValidPeriod);
    }

    /**
     * Countable implementation
     *
     * @return RateSpecialValidPeriod Return count of elements
     */
    public function count()
    {
        return count($this->RateSpecialValidPeriod);
    }
}
