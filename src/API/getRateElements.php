<?php

namespace Gueststream\PMS\IQWare\API;

class getRateElements
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intRateCodeID
     */
    protected $intRateCodeID = null;

    /**
     * @var \DateTime $arrDate
     */
    protected $arrDate = null;

    /**
     * @var \DateTime $depDate
     */
    protected $depDate = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @param int $intGUID
     * @param int $intRateCodeID
     * @param \DateTime $arrDate
     * @param \DateTime $depDate
     * @param string $strISOLanguage
     */
    public function __construct($intGUID, $intRateCodeID, \DateTime $arrDate, \DateTime $depDate, $strISOLanguage)
    {
        $this->intGUID = $intGUID;
        $this->intRateCodeID = $intRateCodeID;
        $this->arrDate = $arrDate->format(\DateTime::ATOM);
        $this->depDate = $depDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\getRateElements
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
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
     * @return \Gueststream\PMS\IQWare\API\getRateElements
     */
    public function setIntRateCodeID($intRateCodeID)
    {
        $this->intRateCodeID = $intRateCodeID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrDate()
    {
        if ($this->arrDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->arrDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $arrDate
     * @return \Gueststream\PMS\IQWare\API\getRateElements
     */
    public function setArrDate(\DateTime $arrDate)
    {
        $this->arrDate = $arrDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepDate()
    {
        if ($this->depDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->depDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $depDate
     * @return \Gueststream\PMS\IQWare\API\getRateElements
     */
    public function setDepDate(\DateTime $depDate)
    {
        $this->depDate = $depDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\getRateElements
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }
}
