<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCTransfer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cTransfer[] $cTransfer
     */
    protected $cTransfer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cTransfer[]
     */
    public function getCTransfer()
    {
        return $this->cTransfer;
    }

    /**
     * @param cTransfer[] $cTransfer
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCTransfer
     */
    public function setCTransfer(array $cTransfer = null)
    {
        $this->cTransfer = $cTransfer;
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
        return isset($this->cTransfer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cTransfer
     */
    public function offsetGet($offset)
    {
        return $this->cTransfer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cTransfer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cTransfer[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cTransfer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cTransfer Return the current element
     */
    public function current()
    {
        return current($this->cTransfer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cTransfer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cTransfer);
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
        reset($this->cTransfer);
    }

    /**
     * Countable implementation
     *
     * @return cTransfer Return count of elements
     */
    public function count()
    {
        return count($this->cTransfer);
    }
}
