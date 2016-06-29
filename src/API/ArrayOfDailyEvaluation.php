<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDailyEvaluation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DailyEvaluation[] $DailyEvaluation
     */
    protected $DailyEvaluation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DailyEvaluation[]
     */
    public function getDailyEvaluation()
    {
        return $this->DailyEvaluation;
    }

    /**
     * @param DailyEvaluation[] $DailyEvaluation
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDailyEvaluation
     */
    public function setDailyEvaluation(array $DailyEvaluation = null)
    {
        $this->DailyEvaluation = $DailyEvaluation;
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
        return isset($this->DailyEvaluation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DailyEvaluation
     */
    public function offsetGet($offset)
    {
        return $this->DailyEvaluation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DailyEvaluation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->DailyEvaluation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->DailyEvaluation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DailyEvaluation Return the current element
     */
    public function current()
    {
        return current($this->DailyEvaluation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DailyEvaluation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DailyEvaluation);
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
        reset($this->DailyEvaluation);
    }

    /**
     * Countable implementation
     *
     * @return DailyEvaluation Return count of elements
     */
    public function count()
    {
        return count($this->DailyEvaluation);
    }
}
