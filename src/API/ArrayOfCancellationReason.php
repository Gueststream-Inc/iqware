<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCancellationReason implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancellationReason[] $CancellationReason
     */
    protected $CancellationReason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancellationReason[]
     */
    public function getCancellationReason()
    {
        return $this->CancellationReason;
    }

    /**
     * @param CancellationReason[] $CancellationReason
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCancellationReason
     */
    public function setCancellationReason(array $CancellationReason = null)
    {
        $this->CancellationReason = $CancellationReason;
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
        return isset($this->CancellationReason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancellationReason
     */
    public function offsetGet($offset)
    {
        return $this->CancellationReason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancellationReason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->CancellationReason[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->CancellationReason[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancellationReason Return the current element
     */
    public function current()
    {
        return current($this->CancellationReason);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CancellationReason);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CancellationReason);
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
        reset($this->CancellationReason);
    }

    /**
     * Countable implementation
     *
     * @return CancellationReason Return count of elements
     */
    public function count()
    {
        return count($this->CancellationReason);
    }
}
