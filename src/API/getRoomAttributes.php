<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomAttributes
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intRoomTypeID
     */
    protected $intRoomTypeID = null;

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
     * @param int $intRoomTypeID
     * @param string $strISOLanguage
     * @param int $intHotelCurrencyID
     */
    public function __construct($intGUID, $intRoomTypeID, $strISOLanguage, $intHotelCurrencyID)
    {
        $this->intGUID = $intGUID;
        $this->intRoomTypeID = $intRoomTypeID;
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
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributes
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomTypeID()
    {
        return $this->intRoomTypeID;
    }

    /**
     * @param int $intRoomTypeID
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributes
     */
    public function setIntRoomTypeID($intRoomTypeID)
    {
        $this->intRoomTypeID = $intRoomTypeID;
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
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributes
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
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributes
     */
    public function setIntHotelCurrencyID($intHotelCurrencyID)
    {
        $this->intHotelCurrencyID = $intHotelCurrencyID;
        return $this;
    }
}
