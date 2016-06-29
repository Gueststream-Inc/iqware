<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfExportedRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExportedRate[] $ExportedRate
     */
    protected $ExportedRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExportedRate[]
     */
    public function getExportedRate()
    {
        return $this->ExportedRate;
    }

    /**
     * @param ExportedRate[] $ExportedRate
     * @return \Gueststream\PMS\IQWare\API\ArrayOfExportedRate
     */
    public function setExportedRate(array $ExportedRate = null)
    {
        $this->ExportedRate = $ExportedRate;
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
        return isset($this->ExportedRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExportedRate
     */
    public function offsetGet($offset)
    {
        return $this->ExportedRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExportedRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->ExportedRate[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ExportedRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExportedRate Return the current element
     */
    public function current()
    {
        return current($this->ExportedRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ExportedRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ExportedRate);
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
        reset($this->ExportedRate);
    }

    /**
     * Countable implementation
     *
     * @return ExportedRate Return count of elements
     */
    public function count()
    {
        return count($this->ExportedRate);
    }
}
