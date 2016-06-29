<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerReservationValidity
{
    const __default = 'Valid';
    const Valid = 'Valid';
    const InvalidUnknown = 'InvalidUnknown';
    const InvalidRestricted = 'InvalidRestricted';
    const InvalidRoomTypeSoldOut = 'InvalidRoomTypeSoldOut';
    const InvalidUnitSold = 'InvalidUnitSold';
    const InvalidEvaluation = 'InvalidEvaluation';
    const InvalidYieldClosedOnStay = 'InvalidYieldClosedOnStay';
    const InvalidYieldClosedOnStayExcept = 'InvalidYieldClosedOnStayExcept';
    const InvalidYieldClosedForArrival = 'InvalidYieldClosedForArrival';
    const InvalidYieldClosedForArrivalExcept = 'InvalidYieldClosedForArrivalExcept';
    const InvalidOwnerInfo = 'InvalidOwnerInfo';
    const InvalidSuiteID = 'InvalidSuiteID';
    const InvalidBookingOutsideValidContractDates = 'InvalidBookingOutsideValidContractDates';
}
