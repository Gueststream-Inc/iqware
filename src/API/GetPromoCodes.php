<?php

namespace Gueststream\PMS\IQWare\API;

class GetPromoCodes
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
     * @return \Gueststream\PMS\IQWare\API\GetPromoCodes
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }
}
