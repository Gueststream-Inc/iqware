<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCPersonCountDaily implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cPersonCountDaily[] $cPersonCountDaily
     */
    protected $cPersonCountDaily = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cPersonCountDaily[]
     */
    public function getCPersonCountDaily()
    {
        return $this->cPersonCountDaily;
    }

    /**
     * @param cPersonCountDaily[] $cPersonCountDaily
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCPersonCountDaily
     */
    public function setCPersonCountDaily(array $cPersonCountDaily = null)
    {
        $this->cPersonCountDaily = $cPersonCountDaily;
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
        return isset($this->cPersonCountDaily[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cPersonCountDaily
     */
    public function offsetGet($offset)
    {
        return $this->cPersonCountDaily[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cPersonCountDaily $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cPersonCountDaily[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cPersonCountDaily[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cPersonCountDaily Return the current element
     */
    public function current()
    {
        return current($this->cPersonCountDaily);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cPersonCountDaily);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cPersonCountDaily);
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
        reset($this->cPersonCountDaily);
    }

    /**
     * Countable implementation
     *
     * @return cPersonCountDaily Return count of elements
     */
    public function count()
    {
        return count($this->cPersonCountDaily);
    }
}
