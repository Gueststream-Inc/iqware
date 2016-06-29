<?php

namespace Gueststream\PMS\IQWare\API;

class GroupReservations
{

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var int $RoomQty
     */
    protected $RoomQty = null;

    /**
     * @var int $GuestTotal
     */
    protected $GuestTotal = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $ID_Group
     */
    protected $ID_Group = null;

    /**
     * @var int $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var string $AccountStatusString
     */
    protected $AccountStatusString = null;

    /**
     * @var string $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @param int $ID_Account
     * @param int $AccountNo
     * @param string $RoomNo
     * @param string $AccountName
     * @param int $ID_RoomType
     * @param string $RoomTypeName
     * @param int $RoomQty
     * @param int $GuestTotal
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $ID_Group
     * @param int $AccountStatus
     * @param string $AccountStatusString
     * @param string $ID_RateCode
     */
    public function __construct($ID_Account, $AccountNo, $RoomNo, $AccountName, $ID_RoomType, $RoomTypeName, $RoomQty, $GuestTotal, \DateTime $ArrivalDate, \DateTime $DepartureDate, $ID_Group, $AccountStatus, $AccountStatusString, $ID_RateCode)
    {
        $this->ID_Account = $ID_Account;
        $this->AccountNo = $AccountNo;
        $this->RoomNo = $RoomNo;
        $this->AccountName = $AccountName;
        $this->ID_RoomType = $ID_RoomType;
        $this->RoomTypeName = $RoomTypeName;
        $this->RoomQty = $RoomQty;
        $this->GuestTotal = $GuestTotal;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->ID_Group = $ID_Group;
        $this->AccountStatus = $AccountStatus;
        $this->AccountStatusString = $AccountStatusString;
        $this->ID_RateCode = $ID_RateCode;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
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
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setRoomTypeName($RoomTypeName)
    {
        $this->RoomTypeName = $RoomTypeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomQty()
    {
        return $this->RoomQty;
    }

    /**
     * @param int $RoomQty
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setRoomQty($RoomQty)
    {
        $this->RoomQty = $RoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestTotal()
    {
        return $this->GuestTotal;
    }

    /**
     * @param int $GuestTotal
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setGuestTotal($GuestTotal)
    {
        $this->GuestTotal = $GuestTotal;
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
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
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
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Group()
    {
        return $this->ID_Group;
    }

    /**
     * @param int $ID_Group
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setID_Group($ID_Group)
    {
        $this->ID_Group = $ID_Group;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param int $AccountStatus
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountStatusString()
    {
        return $this->AccountStatusString;
    }

    /**
     * @param string $AccountStatusString
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setAccountStatusString($AccountStatusString)
    {
        $this->AccountStatusString = $AccountStatusString;
        return $this;
    }

    /**
     * @return string
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param string $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\GroupReservations
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }
}
