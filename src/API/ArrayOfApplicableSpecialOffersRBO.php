<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfApplicableSpecialOffersRBO implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicableSpecialOffersRBO[] $ApplicableSpecialOffersRBO
     */
    protected $ApplicableSpecialOffersRBO = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicableSpecialOffersRBO[]
     */
    public function getApplicableSpecialOffersRBO()
    {
        return $this->ApplicableSpecialOffersRBO;
    }

    /**
     * @param ApplicableSpecialOffersRBO[] $ApplicableSpecialOffersRBO
     * @return \Gueststream\PMS\IQWare\API\ArrayOfApplicableSpecialOffersRBO
     */
    public function setApplicableSpecialOffersRBO(array $ApplicableSpecialOffersRBO = null)
    {
        $this->ApplicableSpecialOffersRBO = $ApplicableSpecialOffersRBO;
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
        return isset($this->ApplicableSpecialOffersRBO[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicableSpecialOffersRBO
     */
    public function offsetGet($offset)
    {
        return $this->ApplicableSpecialOffersRBO[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicableSpecialOffersRBO $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->ApplicableSpecialOffersRBO[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ApplicableSpecialOffersRBO[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicableSpecialOffersRBO Return the current element
     */
    public function current()
    {
        return current($this->ApplicableSpecialOffersRBO);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ApplicableSpecialOffersRBO);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ApplicableSpecialOffersRBO);
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
        reset($this->ApplicableSpecialOffersRBO);
    }

    /**
     * Countable implementation
     *
     * @return ApplicableSpecialOffersRBO Return count of elements
     */
    public function count()
    {
        return count($this->ApplicableSpecialOffersRBO);
    }
}
