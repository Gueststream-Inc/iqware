<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfB2BAnywhere implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var B2BAnywhere[] $B2BAnywhere
     */
    protected $B2BAnywhere = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return B2BAnywhere[]
     */
    public function getB2BAnywhere()
    {
        return $this->B2BAnywhere;
    }

    /**
     * @param B2BAnywhere[] $B2BAnywhere
     * @return \Gueststream\PMS\IQWare\API\ArrayOfB2BAnywhere
     */
    public function setB2BAnywhere(array $B2BAnywhere = null)
    {
        $this->B2BAnywhere = $B2BAnywhere;
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
        return isset($this->B2BAnywhere[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return B2BAnywhere
     */
    public function offsetGet($offset)
    {
        return $this->B2BAnywhere[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param B2BAnywhere $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->B2BAnywhere[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->B2BAnywhere[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return B2BAnywhere Return the current element
     */
    public function current()
    {
        return current($this->B2BAnywhere);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->B2BAnywhere);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->B2BAnywhere);
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
        reset($this->B2BAnywhere);
    }

    /**
     * Countable implementation
     *
     * @return B2BAnywhere Return count of elements
     */
    public function count()
    {
        return count($this->B2BAnywhere);
    }
}
