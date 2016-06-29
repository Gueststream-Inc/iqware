<?php

namespace Gueststream\PMS\IQWare\API;

class ImportRatesAndRoomTypesDetails
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var string $strRateCodeIDs
     */
    protected $strRateCodeIDs = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $ShowOnlyModifiedRates
     */
    protected $ShowOnlyModifiedRates = null;

    /**
     * @param int $PropertyGUID
     * @param string $strRateCodeIDs
     * @param string $strRoomTypeIDs
     * @param \DateTime $BeginDate
     * @param \DateTime $EndDate
     * @param boolean $ShowOnlyModifiedRates
     */
    public function __construct($PropertyGUID, $strRateCodeIDs, $strRoomTypeIDs, \DateTime $BeginDate, \DateTime $EndDate, $ShowOnlyModifiedRates)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->strRateCodeIDs = $strRateCodeIDs;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->ShowOnlyModifiedRates = $ShowOnlyModifiedRates;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCodeIDs()
    {
        return $this->strRateCodeIDs;
    }

    /**
     * @param string $strRateCodeIDs
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setStrRateCodeIDs($strRateCodeIDs)
    {
        $this->strRateCodeIDs = $strRateCodeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypeIDs()
    {
        return $this->strRoomTypeIDs;
    }

    /**
     * @param string $strRoomTypeIDs
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
        if ($this->BeginDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BeginDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BeginDate
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setBeginDate(\DateTime $BeginDate)
    {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyModifiedRates()
    {
        return $this->ShowOnlyModifiedRates;
    }

    /**
     * @param boolean $ShowOnlyModifiedRates
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetails
     */
    public function setShowOnlyModifiedRates($ShowOnlyModifiedRates)
    {
        $this->ShowOnlyModifiedRates = $ShowOnlyModifiedRates;
        return $this;
    }
}
