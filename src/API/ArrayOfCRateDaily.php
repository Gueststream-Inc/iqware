<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCRateDaily implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cRateDaily[] $cRateDaily
     */
    protected $cRateDaily = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cRateDaily[]
     */
    public function getCRateDaily()
    {
        return $this->cRateDaily;
    }

    /**
     * @param cRateDaily[] $cRateDaily
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCRateDaily
     */
    public function setCRateDaily(array $cRateDaily = null)
    {
        $this->cRateDaily = $cRateDaily;
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
        return isset($this->cRateDaily[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cRateDaily
     */
    public function offsetGet($offset)
    {
        return $this->cRateDaily[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cRateDaily $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cRateDaily[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cRateDaily[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cRateDaily Return the current element
     */
    public function current()
    {
        return current($this->cRateDaily);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cRateDaily);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cRateDaily);
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
        reset($this->cRateDaily);
    }

    /**
     * Countable implementation
     *
     * @return cRateDaily Return count of elements
     */
    public function count()
    {
        return count($this->cRateDaily);
    }
}
