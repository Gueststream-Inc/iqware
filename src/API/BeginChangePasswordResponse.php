<?php

namespace Gueststream\PMS\IQWare\API;

class BeginChangePasswordResponse
{

    /**
     * @var int $BeginChangePasswordResult
     */
    protected $BeginChangePasswordResult = null;

    /**
     * @param int $BeginChangePasswordResult
     */
    public function __construct($BeginChangePasswordResult)
    {
        $this->BeginChangePasswordResult = $BeginChangePasswordResult;
    }

    /**
     * @return int
     */
    public function getBeginChangePasswordResult()
    {
        return $this->BeginChangePasswordResult;
    }

    /**
     * @param int $BeginChangePasswordResult
     * @return \Gueststream\PMS\IQWare\API\BeginChangePasswordResponse
     */
    public function setBeginChangePasswordResult($BeginChangePasswordResult)
    {
        $this->BeginChangePasswordResult = $BeginChangePasswordResult;
        return $this;
    }
}
