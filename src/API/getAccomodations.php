<?php

namespace Gueststream\PMS\IQWare\API;

class getAccomodations
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     */
    public function __construct($intGUID, $strISOLanguage)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
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
     * @return \Gueststream\PMS\IQWare\API\getAccomodations
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
     * @return \Gueststream\PMS\IQWare\API\getAccomodations
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }
}
