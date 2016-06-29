<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupRegularPricing
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
     * @var \DateTime $dtArrivalDate
     */
    protected $dtArrivalDate = null;

    /**
     * @var \DateTime $dtDepartureDate
     */
    protected $dtDepartureDate = null;

    /**
     * @var string $strRateCode
     */
    protected $strRateCode = null;

    /**
     * @var string $strListOfRoomTypes
     */
    protected $strListOfRoomTypes = null;

    /**
     * @var TPriceType $PriceType
     */
    protected $PriceType = null;

    /**
     * @var int $aGuestCount
     */
    protected $aGuestCount = null;

    /**
     * @param int $intGUID
     * @param string $LanguageCode
     * @param int $AccountNo
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param string $strRateCode
     * @param string $strListOfRoomTypes
     * @param TPriceType $PriceType
     * @param int $aGuestCount
     */
    public function __construct($intGUID, $LanguageCode, $AccountNo, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $strRateCode, $strListOfRoomTypes, $PriceType, $aGuestCount)
    {
        $this->intGUID = $intGUID;
        $this->LanguageCode = $LanguageCode;
        $this->AccountNo = $AccountNo;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->strRateCode = $strRateCode;
        $this->strListOfRoomTypes = $strListOfRoomTypes;
        $this->PriceType = $PriceType;
        $this->aGuestCount = $aGuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtArrivalDate()
    {
        if ($this->dtArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtArrivalDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setDtArrivalDate(\DateTime $dtArrivalDate)
    {
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtDepartureDate()
    {
        if ($this->dtDepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtDepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtDepartureDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setDtDepartureDate(\DateTime $dtDepartureDate)
    {
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCode()
    {
        return $this->strRateCode;
    }

    /**
     * @param string $strRateCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setStrRateCode($strRateCode)
    {
        $this->strRateCode = $strRateCode;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setStrListOfRoomTypes($strListOfRoomTypes)
    {
        $this->strListOfRoomTypes = $strListOfRoomTypes;
        return $this;
    }

    /**
     * @return TPriceType
     */
    public function getPriceType()
    {
        return $this->PriceType;
    }

    /**
     * @param TPriceType $PriceType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setPriceType($PriceType)
    {
        $this->PriceType = $PriceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAGuestCount()
    {
        return $this->aGuestCount;
    }

    /**
     * @param int $aGuestCount
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricing
     */
    public function setAGuestCount($aGuestCount)
    {
        $this->aGuestCount = $aGuestCount;
        return $this;
    }
}
