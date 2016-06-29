<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_ValidateOwnerReservationRBO
{

    /**
     * @var OwnerReservation $reservation
     */
    protected $reservation = null;

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var BookingCondoType $BkgType
     */
    protected $BkgType = null;

    /**
     * @var boolean $IsInsuranceAccepted
     */
    protected $IsInsuranceAccepted = null;

    /**
     * @var boolean $IsRBO
     */
    protected $IsRBO = null;

    /**
     * @var boolean $MustEvaluateRBO
     */
    protected $MustEvaluateRBO = null;

    /**
     * @var string $strListSpecialOfferApplicable
     */
    protected $strListSpecialOfferApplicable = null;

    /**
     * @var dsDailyManualRates $dsDailyManualRates
     */
    protected $dsDailyManualRates = null;

    /**
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @var dsActivityUnits $dsActivityUnits
     */
    protected $dsActivityUnits = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @param OwnerReservation $reservation
     * @param int $guid
     * @param BookingCondoType $BkgType
     * @param boolean $IsInsuranceAccepted
     * @param boolean $IsRBO
     * @param boolean $MustEvaluateRBO
     * @param string $strListSpecialOfferApplicable
     * @param dsDailyManualRates $dsDailyManualRates
     * @param int $intBusinessSourceID
     * @param dsActivityUnits $dsActivityUnits
     * @param int $ID_ActivityToken
     */
    public function __construct($reservation, $guid, $BkgType, $IsInsuranceAccepted, $IsRBO, $MustEvaluateRBO, $strListSpecialOfferApplicable, $dsDailyManualRates, $intBusinessSourceID, $dsActivityUnits, $ID_ActivityToken)
    {
        $this->reservation = $reservation;
        $this->guid = $guid;
        $this->BkgType = $BkgType;
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        $this->IsRBO = $IsRBO;
        $this->MustEvaluateRBO = $MustEvaluateRBO;
        $this->strListSpecialOfferApplicable = $strListSpecialOfferApplicable;
        $this->dsDailyManualRates = $dsDailyManualRates;
        $this->intBusinessSourceID = $intBusinessSourceID;
        $this->dsActivityUnits = $dsActivityUnits;
        $this->ID_ActivityToken = $ID_ActivityToken;
    }

    /**
     * @return OwnerReservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param OwnerReservation $reservation
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return BookingCondoType
     */
    public function getBkgType()
    {
        return $this->BkgType;
    }

    /**
     * @param BookingCondoType $BkgType
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setBkgType($BkgType)
    {
        $this->BkgType = $BkgType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInsuranceAccepted()
    {
        return $this->IsInsuranceAccepted;
    }

    /**
     * @param boolean $IsInsuranceAccepted
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setIsInsuranceAccepted($IsInsuranceAccepted)
    {
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRBO()
    {
        return $this->IsRBO;
    }

    /**
     * @param boolean $IsRBO
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setIsRBO($IsRBO)
    {
        $this->IsRBO = $IsRBO;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMustEvaluateRBO()
    {
        return $this->MustEvaluateRBO;
    }

    /**
     * @param boolean $MustEvaluateRBO
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setMustEvaluateRBO($MustEvaluateRBO)
    {
        $this->MustEvaluateRBO = $MustEvaluateRBO;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListSpecialOfferApplicable()
    {
        return $this->strListSpecialOfferApplicable;
    }

    /**
     * @param string $strListSpecialOfferApplicable
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setStrListSpecialOfferApplicable($strListSpecialOfferApplicable)
    {
        $this->strListSpecialOfferApplicable = $strListSpecialOfferApplicable;
        return $this;
    }

    /**
     * @return dsDailyManualRates
     */
    public function getDsDailyManualRates()
    {
        return $this->dsDailyManualRates;
    }

    /**
     * @param dsDailyManualRates $dsDailyManualRates
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setDsDailyManualRates($dsDailyManualRates)
    {
        $this->dsDailyManualRates = $dsDailyManualRates;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBusinessSourceID()
    {
        return $this->intBusinessSourceID;
    }

    /**
     * @param int $intBusinessSourceID
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setIntBusinessSourceID($intBusinessSourceID)
    {
        $this->intBusinessSourceID = $intBusinessSourceID;
        return $this;
    }

    /**
     * @return dsActivityUnits
     */
    public function getDsActivityUnits()
    {
        return $this->dsActivityUnits;
    }

    /**
     * @param dsActivityUnits $dsActivityUnits
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setDsActivityUnits($dsActivityUnits)
    {
        $this->dsActivityUnits = $dsActivityUnits;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ActivityToken()
    {
        return $this->ID_ActivityToken;
    }

    /**
     * @param int $ID_ActivityToken
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBO
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }
}
