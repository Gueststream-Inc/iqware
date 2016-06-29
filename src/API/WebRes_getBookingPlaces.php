<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getBookingPlaces
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
     * @var \DateTime $dtDate
     */
    protected $dtDate = null;

    /**
     * @var int $intRateCodeID
     */
    protected $intRateCodeID = null;

    /**
     * @var int $intElementID
     */
    protected $intElementID = null;

    /**
     * @var int $intCurrencyID
     */
    protected $intCurrencyID = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param \DateTime $dtDate
     * @param int $intRateCodeID
     * @param int $intElementID
     * @param int $intCurrencyID
     */
    public function __construct($intGUID, $strISOLanguage, \DateTime $dtDate, $intRateCodeID, $intElementID, $intCurrencyID)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->dtDate = $dtDate->format(\DateTime::ATOM);
        $this->intRateCodeID = $intRateCodeID;
        $this->intElementID = $intElementID;
        $this->intCurrencyID = $intCurrencyID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtDate()
    {
        if ($this->dtDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
     */
    public function setDtDate(\DateTime $dtDate)
    {
        $this->dtDate = $dtDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateCodeID()
    {
        return $this->intRateCodeID;
    }

    /**
     * @param int $intRateCodeID
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
     */
    public function setIntRateCodeID($intRateCodeID)
    {
        $this->intRateCodeID = $intRateCodeID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntElementID()
    {
        return $this->intElementID;
    }

    /**
     * @param int $intElementID
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
     */
    public function setIntElementID($intElementID)
    {
        $this->intElementID = $intElementID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntCurrencyID()
    {
        return $this->intCurrencyID;
    }

    /**
     * @param int $intCurrencyID
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlaces
     */
    public function setIntCurrencyID($intCurrencyID)
    {
        $this->intCurrencyID = $intCurrencyID;
        return $this;
    }
}
