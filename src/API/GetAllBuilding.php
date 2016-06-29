<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllBuilding
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strISOLanguageCode
     */
    protected $strISOLanguageCode = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguageCode
     */
    public function __construct($intGUID, $strISOLanguageCode = "en")
    {
        $this->setIntGUID($intGUID);
        $this->setStrISOLanguageCode($strISOLanguageCode);
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
     * @return \Gueststream\PMS\IQWare\API\GetAllBuilding
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = (int) $intGUID;

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
     * @throws \Exception
     * @return \Gueststream\PMS\IQWare\API\GetAllBuilding
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
	    if(strlen($strISOLanguageCode) !== 2) {
		    throw new \Exception('Not a valid ISO 639-1 2 letter language code.');
	    }

        $this->strISOLanguageCode = strtolower($strISOLanguageCode);
        return $this;
    }
}
