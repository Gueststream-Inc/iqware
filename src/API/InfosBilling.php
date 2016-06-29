<?php

namespace Gueststream\PMS\IQWare\API;

class InfosBilling
{

    /**
     * @var int $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var float $RevRoomChargesTotal
     */
    protected $RevRoomChargesTotal = null;

    /**
     * @var float $RevRoomChargesTaxes
     */
    protected $RevRoomChargesTaxes = null;

    /**
     * @var float $RevElementTotal
     */
    protected $RevElementTotal = null;

    /**
     * @var float $RevElementTaxes
     */
    protected $RevElementTaxes = null;

    /**
     * @var float $RevAttributeTotal
     */
    protected $RevAttributeTotal = null;

    /**
     * @var float $RevAttributeTaxes
     */
    protected $RevAttributeTaxes = null;

    /**
     * @var float $RevLocationTotal
     */
    protected $RevLocationTotal = null;

    /**
     * @var float $RevLocationTaxes
     */
    protected $RevLocationTaxes = null;

    /**
     * @var float $RevSvcChargeTotal
     */
    protected $RevSvcChargeTotal = null;

    /**
     * @var float $RevSvcChargeTaxes
     */
    protected $RevSvcChargeTaxes = null;

    /**
     * @var float $RevElementALaCarteTotal
     */
    protected $RevElementALaCarteTotal = null;

    /**
     * @var float $RevElementALaCarteTaxes
     */
    protected $RevElementALaCarteTaxes = null;

    /**
     * @var float $RevPromotionTotal
     */
    protected $RevPromotionTotal = null;

    /**
     * @var float $RevPromotionTaxes
     */
    protected $RevPromotionTaxes = null;

    /**
     * @var string $RateCode
     */
    protected $RateCode = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $Adults
     */
    protected $Adults = null;

    /**
     * @var int $Children
     */
    protected $Children = null;

    /**
     * @var string $RoomTypeSold
     */
    protected $RoomTypeSold = null;

    /**
     * @var string $RoomTypeOccupied
     */
    protected $RoomTypeOccupied = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $HomePhone
     */
    protected $HomePhone = null;

    /**
     * @var \DateTime $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @param int $ConfirmationNo
     * @param float $RevRoomChargesTotal
     * @param float $RevRoomChargesTaxes
     * @param float $RevElementTotal
     * @param float $RevElementTaxes
     * @param float $RevAttributeTotal
     * @param float $RevAttributeTaxes
     * @param float $RevLocationTotal
     * @param float $RevLocationTaxes
     * @param float $RevSvcChargeTotal
     * @param float $RevSvcChargeTaxes
     * @param float $RevElementALaCarteTotal
     * @param float $RevElementALaCarteTaxes
     * @param float $RevPromotionTotal
     * @param float $RevPromotionTaxes
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $Adults
     * @param int $Children
     * @param \DateTime $BookingDate
     */
    public function __construct($ConfirmationNo, $RevRoomChargesTotal, $RevRoomChargesTaxes, $RevElementTotal, $RevElementTaxes, $RevAttributeTotal, $RevAttributeTaxes, $RevLocationTotal, $RevLocationTaxes, $RevSvcChargeTotal, $RevSvcChargeTaxes, $RevElementALaCarteTotal, $RevElementALaCarteTaxes, $RevPromotionTotal, $RevPromotionTaxes, \DateTime $ArrivalDate, \DateTime $DepartureDate, $Adults, $Children, \DateTime $BookingDate)
    {
        $this->ConfirmationNo = $ConfirmationNo;
        $this->RevRoomChargesTotal = $RevRoomChargesTotal;
        $this->RevRoomChargesTaxes = $RevRoomChargesTaxes;
        $this->RevElementTotal = $RevElementTotal;
        $this->RevElementTaxes = $RevElementTaxes;
        $this->RevAttributeTotal = $RevAttributeTotal;
        $this->RevAttributeTaxes = $RevAttributeTaxes;
        $this->RevLocationTotal = $RevLocationTotal;
        $this->RevLocationTaxes = $RevLocationTaxes;
        $this->RevSvcChargeTotal = $RevSvcChargeTotal;
        $this->RevSvcChargeTaxes = $RevSvcChargeTaxes;
        $this->RevElementALaCarteTotal = $RevElementALaCarteTotal;
        $this->RevElementALaCarteTaxes = $RevElementALaCarteTaxes;
        $this->RevPromotionTotal = $RevPromotionTotal;
        $this->RevPromotionTaxes = $RevPromotionTaxes;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->Adults = $Adults;
        $this->Children = $Children;
        $this->BookingDate = $BookingDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getConfirmationNo()
    {
        return $this->ConfirmationNo;
    }

    /**
     * @param int $ConfirmationNo
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setConfirmationNo($ConfirmationNo)
    {
        $this->ConfirmationNo = $ConfirmationNo;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevRoomChargesTotal()
    {
        return $this->RevRoomChargesTotal;
    }

    /**
     * @param float $RevRoomChargesTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevRoomChargesTotal($RevRoomChargesTotal)
    {
        $this->RevRoomChargesTotal = $RevRoomChargesTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevRoomChargesTaxes()
    {
        return $this->RevRoomChargesTaxes;
    }

    /**
     * @param float $RevRoomChargesTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevRoomChargesTaxes($RevRoomChargesTaxes)
    {
        $this->RevRoomChargesTaxes = $RevRoomChargesTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevElementTotal()
    {
        return $this->RevElementTotal;
    }

    /**
     * @param float $RevElementTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevElementTotal($RevElementTotal)
    {
        $this->RevElementTotal = $RevElementTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevElementTaxes()
    {
        return $this->RevElementTaxes;
    }

    /**
     * @param float $RevElementTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevElementTaxes($RevElementTaxes)
    {
        $this->RevElementTaxes = $RevElementTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevAttributeTotal()
    {
        return $this->RevAttributeTotal;
    }

    /**
     * @param float $RevAttributeTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevAttributeTotal($RevAttributeTotal)
    {
        $this->RevAttributeTotal = $RevAttributeTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevAttributeTaxes()
    {
        return $this->RevAttributeTaxes;
    }

    /**
     * @param float $RevAttributeTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevAttributeTaxes($RevAttributeTaxes)
    {
        $this->RevAttributeTaxes = $RevAttributeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevLocationTotal()
    {
        return $this->RevLocationTotal;
    }

    /**
     * @param float $RevLocationTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevLocationTotal($RevLocationTotal)
    {
        $this->RevLocationTotal = $RevLocationTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevLocationTaxes()
    {
        return $this->RevLocationTaxes;
    }

    /**
     * @param float $RevLocationTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevLocationTaxes($RevLocationTaxes)
    {
        $this->RevLocationTaxes = $RevLocationTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevSvcChargeTotal()
    {
        return $this->RevSvcChargeTotal;
    }

    /**
     * @param float $RevSvcChargeTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevSvcChargeTotal($RevSvcChargeTotal)
    {
        $this->RevSvcChargeTotal = $RevSvcChargeTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevSvcChargeTaxes()
    {
        return $this->RevSvcChargeTaxes;
    }

    /**
     * @param float $RevSvcChargeTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevSvcChargeTaxes($RevSvcChargeTaxes)
    {
        $this->RevSvcChargeTaxes = $RevSvcChargeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevElementALaCarteTotal()
    {
        return $this->RevElementALaCarteTotal;
    }

    /**
     * @param float $RevElementALaCarteTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevElementALaCarteTotal($RevElementALaCarteTotal)
    {
        $this->RevElementALaCarteTotal = $RevElementALaCarteTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevElementALaCarteTaxes()
    {
        return $this->RevElementALaCarteTaxes;
    }

    /**
     * @param float $RevElementALaCarteTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevElementALaCarteTaxes($RevElementALaCarteTaxes)
    {
        $this->RevElementALaCarteTaxes = $RevElementALaCarteTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevPromotionTotal()
    {
        return $this->RevPromotionTotal;
    }

    /**
     * @param float $RevPromotionTotal
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevPromotionTotal($RevPromotionTotal)
    {
        $this->RevPromotionTotal = $RevPromotionTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevPromotionTaxes()
    {
        return $this->RevPromotionTaxes;
    }

    /**
     * @param float $RevPromotionTaxes
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRevPromotionTaxes($RevPromotionTaxes)
    {
        $this->RevPromotionTaxes = $RevPromotionTaxes;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCode()
    {
        return $this->RateCode;
    }

    /**
     * @param string $RateCode
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRateCode($RateCode)
    {
        $this->RateCode = $RateCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
        return $this->Adults;
    }

    /**
     * @param int $Adults
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setAdults($Adults)
    {
        $this->Adults = $Adults;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param int $Children
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setChildren($Children)
    {
        $this->Children = $Children;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeSold()
    {
        return $this->RoomTypeSold;
    }

    /**
     * @param string $RoomTypeSold
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRoomTypeSold($RoomTypeSold)
    {
        $this->RoomTypeSold = $RoomTypeSold;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeOccupied()
    {
        return $this->RoomTypeOccupied;
    }

    /**
     * @param string $RoomTypeOccupied
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setRoomTypeOccupied($RoomTypeOccupied)
    {
        $this->RoomTypeOccupied = $RoomTypeOccupied;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBookingDate()
    {
        if ($this->BookingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BookingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BookingDate
     * @return \Gueststream\PMS\IQWare\API\InfosBilling
     */
    public function setBookingDate(\DateTime $BookingDate)
    {
        $this->BookingDate = $BookingDate->format(\DateTime::ATOM);
        return $this;
    }
}
