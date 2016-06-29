<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_ValidateOwnerReservationRBOResponse
{

    /**
     * @var OwnerReservationValidityRBOResponse $WebRes_ValidateOwnerReservationRBOResult
     */
    protected $WebRes_ValidateOwnerReservationRBOResult = null;

    /**
     * @var OwnerReservationValue $reservationValue
     */
    protected $reservationValue = null;

    /**
     * @var string $strListSpecialOffertNotDefault
     */
    protected $strListSpecialOffertNotDefault = null;

    /**
     * @param OwnerReservationValidityRBOResponse $WebRes_ValidateOwnerReservationRBOResult
     * @param OwnerReservationValue $reservationValue
     * @param string $strListSpecialOffertNotDefault
     */
    public function __construct($WebRes_ValidateOwnerReservationRBOResult, $reservationValue, $strListSpecialOffertNotDefault)
    {
        $this->WebRes_ValidateOwnerReservationRBOResult = $WebRes_ValidateOwnerReservationRBOResult;
        $this->reservationValue = $reservationValue;
        $this->strListSpecialOffertNotDefault = $strListSpecialOffertNotDefault;
    }

    /**
     * @return OwnerReservationValidityRBOResponse
     */
    public function getWebRes_ValidateOwnerReservationRBOResult()
    {
        return $this->WebRes_ValidateOwnerReservationRBOResult;
    }

    /**
     * @param OwnerReservationValidityRBOResponse $WebRes_ValidateOwnerReservationRBOResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBOResponse
     */
    public function setWebRes_ValidateOwnerReservationRBOResult($WebRes_ValidateOwnerReservationRBOResult)
    {
        $this->WebRes_ValidateOwnerReservationRBOResult = $WebRes_ValidateOwnerReservationRBOResult;
        return $this;
    }

    /**
     * @return OwnerReservationValue
     */
    public function getReservationValue()
    {
        return $this->reservationValue;
    }

    /**
     * @param OwnerReservationValue $reservationValue
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBOResponse
     */
    public function setReservationValue($reservationValue)
    {
        $this->reservationValue = $reservationValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListSpecialOffertNotDefault()
    {
        return $this->strListSpecialOffertNotDefault;
    }

    /**
     * @param string $strListSpecialOffertNotDefault
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationRBOResponse
     */
    public function setStrListSpecialOffertNotDefault($strListSpecialOffertNotDefault)
    {
        $this->strListSpecialOffertNotDefault = $strListSpecialOffertNotDefault;
        return $this;
    }
}
