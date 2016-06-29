<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfBedding implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Bedding[] $Bedding
     */
    protected $Bedding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Bedding[]
     */
    public function getBedding()
    {
        return $this->Bedding;
    }

    /**
     * @param Bedding[] $Bedding
     * @return \Gueststream\PMS\IQWare\API\ArrayOfBedding
     */
    public function setBedding(array $Bedding = null)
    {
        $this->Bedding = $Bedding;
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
        return isset($this->Bedding[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Bedding
     */
    public function offsetGet($offset)
    {
        return $this->Bedding[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Bedding $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Bedding[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Bedding[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Bedding Return the current element
     */
    public function current()
    {
        return current($this->Bedding);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Bedding);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Bedding);
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
        reset($this->Bedding);
    }

    /**
     * Countable implementation
     *
     * @return Bedding Return count of elements
     */
    public function count()
    {
        return count($this->Bedding);
    }
}
