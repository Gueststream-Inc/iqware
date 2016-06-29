<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getCreditCardType
{

    /**
     * @var string $CCNumber
     */
    protected $CCNumber = null;

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @param string $CCNumber
     * @param int $intGUID
     * @param string $strISOLanguage
     */
    public function __construct($CCNumber, $intGUID, $strISOLanguage)
    {
        $this->CCNumber = $CCNumber;
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
    }

    /**
     * @return string
     */
    public function getCCNumber()
    {
        return $this->CCNumber;
    }

    /**
     * @param string $CCNumber
     * @return \Gueststream\PMS\IQWare\API\WebRes_getCreditCardType
     */
    public function setCCNumber($CCNumber)
    {
        $this->CCNumber = $CCNumber;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getCreditCardType
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getCreditCardType
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }
}
