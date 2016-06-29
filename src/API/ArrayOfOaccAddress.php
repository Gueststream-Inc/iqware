<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfOaccAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var oaccAddress[] $oaccAddress
     */
    protected $oaccAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return oaccAddress[]
     */
    public function getOaccAddress()
    {
        return $this->oaccAddress;
    }

    /**
     * @param oaccAddress[] $oaccAddress
     * @return \Gueststream\PMS\IQWare\API\ArrayOfOaccAddress
     */
    public function setOaccAddress(array $oaccAddress = null)
    {
        $this->oaccAddress = $oaccAddress;
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
        return isset($this->oaccAddress[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return oaccAddress
     */
    public function offsetGet($offset)
    {
        return $this->oaccAddress[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param oaccAddress $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->oaccAddress[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->oaccAddress[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return oaccAddress Return the current element
     */
    public function current()
    {
        return current($this->oaccAddress);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->oaccAddress);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->oaccAddress);
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
        reset($this->oaccAddress);
    }

    /**
     * Countable implementation
     *
     * @return oaccAddress Return count of elements
     */
    public function count()
    {
        return count($this->oaccAddress);
    }
}
