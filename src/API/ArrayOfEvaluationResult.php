<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfEvaluationResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EvaluationResult[] $EvaluationResult
     */
    protected $EvaluationResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EvaluationResult[]
     */
    public function getEvaluationResult()
    {
        return $this->EvaluationResult;
    }

    /**
     * @param EvaluationResult[] $EvaluationResult
     * @return \Gueststream\PMS\IQWare\API\ArrayOfEvaluationResult
     */
    public function setEvaluationResult(array $EvaluationResult = null)
    {
        $this->EvaluationResult = $EvaluationResult;
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
        return isset($this->EvaluationResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EvaluationResult
     */
    public function offsetGet($offset)
    {
        return $this->EvaluationResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EvaluationResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->EvaluationResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->EvaluationResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EvaluationResult Return the current element
     */
    public function current()
    {
        return current($this->EvaluationResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->EvaluationResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->EvaluationResult);
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
        reset($this->EvaluationResult);
    }

    /**
     * Countable implementation
     *
     * @return EvaluationResult Return count of elements
     */
    public function count()
    {
        return count($this->EvaluationResult);
    }
}
