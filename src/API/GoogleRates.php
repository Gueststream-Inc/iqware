<?php

namespace Gueststream\PMS\IQWare\API;

class GoogleRates
{

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @param int $ID_RateCode
     * @param int $ID_RoomType
     */
    public function __construct($ID_RateCode, $ID_RoomType)
    {
        $this->ID_RateCode = $ID_RateCode;
        $this->ID_RoomType = $ID_RoomType;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\GoogleRates
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\GoogleRates
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }
}
