<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomAttributesAndLocations
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intRoomID
     */
    protected $intRoomID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var int $intHotelCurrencyID
     */
    protected $intHotelCurrencyID = null;

    /**
     * @param int $intGUID
     * @param int $intRoomID
     * @param string $strISOLanguage
     * @param int $intHotelCurrencyID
     */
    public function __construct($intGUID, $intRoomID, $strISOLanguage, $intHotelCurrencyID)
    {
        $this->intGUID = $intGUID;
        $this->intRoomID = $intRoomID;
        $this->strISOLanguage = $strISOLanguage;
        $this->intHotelCurrencyID = $intHotelCurrencyID;
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
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesAndLocations
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomID()
    {
        return $this->intRoomID;
    }

    /**
     * @param int $intRoomID
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesAndLocations
     */
    public function setIntRoomID($intRoomID)
    {
        $this->intRoomID = $intRoomID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguage()
    {
        return $this->strISOLanguage;
    }

    /**
     * @param string $strISOLanguage
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesAndLocations
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntHotelCurrencyID()
    {
        return $this->intHotelCurrencyID;
    }

    /**
     * @param int $intHotelCurrencyID
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesAndLocations
     */
    public function setIntHotelCurrencyID($intHotelCurrencyID)
    {
        $this->intHotelCurrencyID = $intHotelCurrencyID;
        return $this;
    }
}
