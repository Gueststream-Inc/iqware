<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomSpecifications
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $strISOLanguageCode
     */
    protected $strISOLanguageCode = null;

    /**
     * @var TRoomSearchBy $SearchBy
     */
    protected $SearchBy = null;

    /**
     * @var string $SearchValue
     */
    protected $SearchValue = null;

    /**
     * @param int $guid
     * @param string $strISOLanguageCode
     * @param TRoomSearchBy $SearchBy
     * @param string $SearchValue
     */
    public function __construct($guid, $strISOLanguageCode, $SearchBy, $SearchValue)
    {
        $this->guid = $guid;
        $this->strISOLanguageCode = $strISOLanguageCode;
        $this->SearchBy = $SearchBy;
        $this->SearchValue = $SearchValue;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\getRoomSpecifications
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguageCode()
    {
        return $this->strISOLanguageCode;
    }

    /**
     * @param string $strISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\getRoomSpecifications
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
        $this->strISOLanguageCode = $strISOLanguageCode;
        return $this;
    }

    /**
     * @return TRoomSearchBy
     */
    public function getSearchBy()
    {
        return $this->SearchBy;
    }

    /**
     * @param TRoomSearchBy $SearchBy
     * @return \Gueststream\PMS\IQWare\API\getRoomSpecifications
     */
    public function setSearchBy($SearchBy)
    {
        $this->SearchBy = $SearchBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
        return $this->SearchValue;
    }

    /**
     * @param string $SearchValue
     * @return \Gueststream\PMS\IQWare\API\getRoomSpecifications
     */
    public function setSearchValue($SearchValue)
    {
        $this->SearchValue = $SearchValue;
        return $this;
    }
}
