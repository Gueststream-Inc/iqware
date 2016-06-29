<?php

namespace Gueststream\PMS\IQWare\API;

class SetPushIDResponse
{

    /**
     * @var boolean $SetPushIDResult
     */
    protected $SetPushIDResult = null;

    /**
     * @param boolean $SetPushIDResult
     */
    public function __construct($SetPushIDResult)
    {
        $this->SetPushIDResult = $SetPushIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetPushIDResult()
    {
        return $this->SetPushIDResult;
    }

    /**
     * @param boolean $SetPushIDResult
     * @return \Gueststream\PMS\IQWare\API\SetPushIDResponse
     */
    public function setSetPushIDResult($SetPushIDResult)
    {
        $this->SetPushIDResult = $SetPushIDResult;
        return $this;
    }
}
