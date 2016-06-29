<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsSpecifications
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
     * @param int $guid
     * @param string $strISOLanguageCode
     */
    public function __construct($guid, $strISOLanguageCode)
    {
        $this->guid = $guid;
        $this->strISOLanguageCode = $strISOLanguageCode;
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
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsSpecifications
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
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsSpecifications
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
        $this->strISOLanguageCode = $strISOLanguageCode;
        return $this;
    }
}
