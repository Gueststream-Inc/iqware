<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfServiceCharge implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCharge[] $ServiceCharge
     */
    protected $ServiceCharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCharge[]
     */
    public function getServiceCharge()
    {
        return $this->ServiceCharge;
    }

    /**
     * @param ServiceCharge[] $ServiceCharge
     * @return \Gueststream\PMS\IQWare\API\ArrayOfServiceCharge
     */
    public function setServiceCharge(array $ServiceCharge = null)
    {
        $this->ServiceCharge = $ServiceCharge;
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
        return isset($this->ServiceCharge[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCharge
     */
    public function offsetGet($offset)
    {
        return $this->ServiceCharge[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCharge $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->ServiceCharge[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ServiceCharge[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCharge Return the current element
     */
    public function current()
    {
        return current($this->ServiceCharge);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ServiceCharge);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ServiceCharge);
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
        reset($this->ServiceCharge);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCharge Return count of elements
     */
    public function count()
    {
        return count($this->ServiceCharge);
    }
}
