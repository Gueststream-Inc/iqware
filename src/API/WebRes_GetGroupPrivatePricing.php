<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupPrivatePricing
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $strListOfRoomTypes
     */
    protected $strListOfRoomTypes = null;

    /**
     * @param int $intGUID
     * @param string $LanguageCode
     * @param int $AccountNo
     * @param string $strListOfRoomTypes
     */
    public function __construct($intGUID, $LanguageCode, $AccountNo, $strListOfRoomTypes)
    {
        $this->intGUID = $intGUID;
        $this->LanguageCode = $LanguageCode;
        $this->AccountNo = $AccountNo;
        $this->strListOfRoomTypes = $strListOfRoomTypes;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupPrivatePricing
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupPrivatePricing
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupPrivatePricing
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListOfRoomTypes()
    {
        return $this->strListOfRoomTypes;
    }

    /**
     * @param string $strListOfRoomTypes
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupPrivatePricing
     */
    public function setStrListOfRoomTypes($strListOfRoomTypes)
    {
        $this->strListOfRoomTypes = $strListOfRoomTypes;
        return $this;
    }
}
