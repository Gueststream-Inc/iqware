<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfGlobalAccess implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GlobalAccess[] $GlobalAccess
     */
    protected $GlobalAccess = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GlobalAccess[]
     */
    public function getGlobalAccess()
    {
        return $this->GlobalAccess;
    }

    /**
     * @param GlobalAccess[] $GlobalAccess
     * @return \Gueststream\PMS\IQWare\API\ArrayOfGlobalAccess
     */
    public function setGlobalAccess(array $GlobalAccess = null)
    {
        $this->GlobalAccess = $GlobalAccess;
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
        return isset($this->GlobalAccess[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GlobalAccess
     */
    public function offsetGet($offset)
    {
        return $this->GlobalAccess[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GlobalAccess $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->GlobalAccess[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->GlobalAccess[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GlobalAccess Return the current element
     */
    public function current()
    {
        return current($this->GlobalAccess);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->GlobalAccess);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->GlobalAccess);
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
        reset($this->GlobalAccess);
    }

    /**
     * Countable implementation
     *
     * @return GlobalAccess Return count of elements
     */
    public function count()
    {
        return count($this->GlobalAccess);
    }
}
