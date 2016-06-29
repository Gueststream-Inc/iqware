<?php

namespace Gueststream\PMS\IQWare\API;

class PoolStatistics
{

    /**
     * @var int $PoolingMax
     */
    protected $PoolingMax = null;

    /**
     * @var int $ObjectInUse
     */
    protected $ObjectInUse = null;

    /**
     * @var int $SizeOfPool
     */
    protected $SizeOfPool = null;

    /**
     * @var string $ErrorMsg
     */
    protected $ErrorMsg = null;

    /**
     * @var string $DotNetCatchedExceptionMessage
     */
    protected $DotNetCatchedExceptionMessage = null;

    /**
     * @param int $PoolingMax
     * @param int $ObjectInUse
     * @param int $SizeOfPool
     */
    public function __construct($PoolingMax, $ObjectInUse, $SizeOfPool)
    {
        $this->PoolingMax = $PoolingMax;
        $this->ObjectInUse = $ObjectInUse;
        $this->SizeOfPool = $SizeOfPool;
    }

    /**
     * @return int
     */
    public function getPoolingMax()
    {
        return $this->PoolingMax;
    }

    /**
     * @param int $PoolingMax
     * @return \Gueststream\PMS\IQWare\API\PoolStatistics
     */
    public function setPoolingMax($PoolingMax)
    {
        $this->PoolingMax = $PoolingMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectInUse()
    {
        return $this->ObjectInUse;
    }

    /**
     * @param int $ObjectInUse
     * @return \Gueststream\PMS\IQWare\API\PoolStatistics
     */
    public function setObjectInUse($ObjectInUse)
    {
        $this->ObjectInUse = $ObjectInUse;
        return $this;
    }

    /**
     * @return int
     */
    public function getSizeOfPool()
    {
        return $this->SizeOfPool;
    }

    /**
     * @param int $SizeOfPool
     * @return \Gueststream\PMS\IQWare\API\PoolStatistics
     */
    public function setSizeOfPool($SizeOfPool)
    {
        $this->SizeOfPool = $SizeOfPool;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }

    /**
     * @param string $ErrorMsg
     * @return \Gueststream\PMS\IQWare\API\PoolStatistics
     */
    public function setErrorMsg($ErrorMsg)
    {
        $this->ErrorMsg = $ErrorMsg;
        return $this;
    }

    /**
     * @return string
     */
    public function getDotNetCatchedExceptionMessage()
    {
        return $this->DotNetCatchedExceptionMessage;
    }

    /**
     * @param string $DotNetCatchedExceptionMessage
     * @return \Gueststream\PMS\IQWare\API\PoolStatistics
     */
    public function setDotNetCatchedExceptionMessage($DotNetCatchedExceptionMessage)
    {
        $this->DotNetCatchedExceptionMessage = $DotNetCatchedExceptionMessage;
        return $this;
    }
}
