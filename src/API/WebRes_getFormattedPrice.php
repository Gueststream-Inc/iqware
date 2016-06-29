<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getFormattedPrice
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strLang
     */
    protected $strLang = null;

    /**
     * @var float $dAmount
     */
    protected $dAmount = null;

    /**
     * @var int $intCurrID
     */
    protected $intCurrID = null;

    /**
     * @param int $intGUID
     * @param string $strLang
     * @param float $dAmount
     * @param int $intCurrID
     */
    public function __construct($intGUID, $strLang, $dAmount, $intCurrID)
    {
        $this->intGUID = $intGUID;
        $this->strLang = $strLang;
        $this->dAmount = $dAmount;
        $this->intCurrID = $intCurrID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getFormattedPrice
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLang()
    {
        return $this->strLang;
    }

    /**
     * @param string $strLang
     * @return \Gueststream\PMS\IQWare\API\WebRes_getFormattedPrice
     */
    public function setStrLang($strLang)
    {
        $this->strLang = $strLang;
        return $this;
    }

    /**
     * @return float
     */
    public function getDAmount()
    {
        return $this->dAmount;
    }

    /**
     * @param float $dAmount
     * @return \Gueststream\PMS\IQWare\API\WebRes_getFormattedPrice
     */
    public function setDAmount($dAmount)
    {
        $this->dAmount = $dAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntCurrID()
    {
        return $this->intCurrID;
    }

    /**
     * @param int $intCurrID
     * @return \Gueststream\PMS\IQWare\API\WebRes_getFormattedPrice
     */
    public function setIntCurrID($intCurrID)
    {
        $this->intCurrID = $intCurrID;
        return $this;
    }
}
