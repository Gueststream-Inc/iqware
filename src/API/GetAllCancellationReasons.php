<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllCancellationReasons
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @param int $PropertyGUID
     */
    public function __construct($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationReasons
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }
}
