<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfIQImage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var IQImage[] $IQImage
     */
    protected $IQImage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IQImage[]
     */
    public function getIQImage()
    {
        return $this->IQImage;
    }

    /**
     * @param IQImage[] $IQImage
     * @return \Gueststream\PMS\IQWare\API\ArrayOfIQImage
     */
    public function setIQImage(array $IQImage = null)
    {
        $this->IQImage = $IQImage;
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
        return isset($this->IQImage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return IQImage
     */
    public function offsetGet($offset)
    {
        return $this->IQImage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param IQImage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->IQImage[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->IQImage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return IQImage Return the current element
     */
    public function current()
    {
        return current($this->IQImage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->IQImage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->IQImage);
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
        reset($this->IQImage);
    }

    /**
     * Countable implementation
     *
     * @return IQImage Return count of elements
     */
    public function count()
    {
        return count($this->IQImage);
    }
}
