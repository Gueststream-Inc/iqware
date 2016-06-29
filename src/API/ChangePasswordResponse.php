<?php

namespace Gueststream\PMS\IQWare\API;

class ChangePasswordResponse
{

    /**
     * @var string $ChangePasswordResult
     */
    protected $ChangePasswordResult = null;

    /**
     * @param string $ChangePasswordResult
     */
    public function __construct($ChangePasswordResult)
    {
        $this->ChangePasswordResult = $ChangePasswordResult;
    }

    /**
     * @return string
     */
    public function getChangePasswordResult()
    {
        return $this->ChangePasswordResult;
    }

    /**
     * @param string $ChangePasswordResult
     * @return \Gueststream\PMS\IQWare\API\ChangePasswordResponse
     */
    public function setChangePasswordResult($ChangePasswordResult)
    {
        $this->ChangePasswordResult = $ChangePasswordResult;
        return $this;
    }
}
