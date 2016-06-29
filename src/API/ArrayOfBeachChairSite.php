<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfBeachChairSite implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BeachChairSite[] $BeachChairSite
     */
    protected $BeachChairSite = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BeachChairSite[]
     */
    public function getBeachChairSite()
    {
        return $this->BeachChairSite;
    }

    /**
     * @param BeachChairSite[] $BeachChairSite
     * @return \Gueststream\PMS\IQWare\API\ArrayOfBeachChairSite
     */
    public function setBeachChairSite(array $BeachChairSite = null)
    {
        $this->BeachChairSite = $BeachChairSite;
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
        return isset($this->BeachChairSite[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BeachChairSite
     */
    public function offsetGet($offset)
    {
        return $this->BeachChairSite[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BeachChairSite $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->BeachChairSite[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->BeachChairSite[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BeachChairSite Return the current element
     */
    public function current()
    {
        return current($this->BeachChairSite);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->BeachChairSite);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->BeachChairSite);
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
        reset($this->BeachChairSite);
    }

    /**
     * Countable implementation
     *
     * @return BeachChairSite Return count of elements
     */
    public function count()
    {
        return count($this->BeachChairSite);
    }
}
