<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCComments implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cComments[] $cComments
     */
    protected $cComments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cComments[]
     */
    public function getCComments()
    {
        return $this->cComments;
    }

    /**
     * @param cComments[] $cComments
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCComments
     */
    public function setCComments(array $cComments = null)
    {
        $this->cComments = $cComments;
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
        return isset($this->cComments[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cComments
     */
    public function offsetGet($offset)
    {
        return $this->cComments[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cComments $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cComments[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cComments[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cComments Return the current element
     */
    public function current()
    {
        return current($this->cComments);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cComments);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cComments);
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
        reset($this->cComments);
    }

    /**
     * Countable implementation
     *
     * @return cComments Return count of elements
     */
    public function count()
    {
        return count($this->cComments);
    }
}
