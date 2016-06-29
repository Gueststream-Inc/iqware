<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_VHCheck
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @param int $intGUID
     */
    public function __construct($intGUID)
    {
        $this->intGUID = $intGUID;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\WebRes_VHCheck
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }
}
