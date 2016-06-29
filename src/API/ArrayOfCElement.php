<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cElement[] $cElement
     */
    protected $cElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cElement[]
     */
    public function getCElement()
    {
        return $this->cElement;
    }

    /**
     * @param cElement[] $cElement
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCElement
     */
    public function setCElement(array $cElement = null)
    {
        $this->cElement = $cElement;
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
        return isset($this->cElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cElement
     */
    public function offsetGet($offset)
    {
        return $this->cElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cElement[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cElement Return the current element
     */
    public function current()
    {
        return current($this->cElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cElement);
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
        reset($this->cElement);
    }

    /**
     * Countable implementation
     *
     * @return cElement Return count of elements
     */
    public function count()
    {
        return count($this->cElement);
    }
}
