<?php

namespace Gueststream\PMS\IQWare\API;

class dtReservations
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $ClubCardMemberNo
     */
    protected $ClubCardMemberNo = null;

    /**
     * @var int $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @param int $AccountNo
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param string $LastName
     * @param string $FirstName
     * @param string $PhoneNo
     * @param string $CompanyName
     * @param string $ClubCardMemberNo
     * @param int $AccountStatus
     */
    public function __construct($AccountNo, \DateTime $ArrivalDate, \DateTime $DepartureDate, $LastName, $FirstName, $PhoneNo, $CompanyName, $ClubCardMemberNo, $AccountStatus)
    {
        $this->AccountNo = $AccountNo;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->PhoneNo = $PhoneNo;
        $this->CompanyName = $CompanyName;
        $this->ClubCardMemberNo = $ClubCardMemberNo;
        $this->AccountStatus = $AccountStatus;
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubCardMemberNo()
    {
        return $this->ClubCardMemberNo;
    }

    /**
     * @param string $ClubCardMemberNo
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setClubCardMemberNo($ClubCardMemberNo)
    {
        $this->ClubCardMemberNo = $ClubCardMemberNo;
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
     * @return \Gueststream\PMS\IQWare\API\dtReservations
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }
}
