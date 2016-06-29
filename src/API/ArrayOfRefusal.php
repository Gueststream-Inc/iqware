<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRefusal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Refusal[] $Refusal
     */
    protected $Refusal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Refusal[]
     */
    public function getRefusal()
    {
        return $this->Refusal;
    }

    /**
     * @param Refusal[] $Refusal
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRefusal
     */
    public function setRefusal(array $Refusal = null)
    {
        $this->Refusal = $Refusal;
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
        return isset($this->Refusal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Refusal
     */
    public function offsetGet($offset)
    {
        return $this->Refusal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Refusal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Refusal[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Refusal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Refusal Return the current element
     */
    public function current()
    {
        return current($this->Refusal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Refusal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Refusal);
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
        reset($this->Refusal);
    }

    /**
     * Countable implementation
     *
     * @return Refusal Return count of elements
     */
    public function count()
    {
        return count($this->Refusal);
    }
}
