<?php

namespace Gueststream\PMS\IQWare\API;

class MemberReservation
{

    /**
     * @var string $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var string $ResAccountNo
     */
    protected $ResAccountNo = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $Discriminator
     */
    protected $Discriminator = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var float $TotalSoldeA
     */
    protected $TotalSoldeA = null;

    /**
     * @var float $TotalSoldeB
     */
    protected $TotalSoldeB = null;

    /**
     * @var float $TotalSoldeC
     */
    protected $TotalSoldeC = null;

    /**
     * @var float $TotalSoldeD
     */
    protected $TotalSoldeD = null;

    /**
     * @var float $TotalSubFolioA
     */
    protected $TotalSubFolioA = null;

    /**
     * @var float $TotalSubFolioB
     */
    protected $TotalSubFolioB = null;

    /**
     * @var float $TotalSubFolioC
     */
    protected $TotalSubFolioC = null;

    /**
     * @var float $TotalSubFolioD
     */
    protected $TotalSubFolioD = null;

    /**
     * @var float $TotalFolios
     */
    protected $TotalFolios = null;

    /**
     * @var string $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @param int $ID_Member
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param float $TotalSoldeA
     * @param float $TotalSoldeB
     * @param float $TotalSoldeC
     * @param float $TotalSoldeD
     * @param float $TotalSubFolioA
     * @param float $TotalSubFolioB
     * @param float $TotalSubFolioC
     * @param float $TotalSubFolioD
     * @param float $TotalFolios
     */
    public function __construct($ID_Member, \DateTime $ArrivalDate, \DateTime $DepartureDate, $TotalSoldeA, $TotalSoldeB, $TotalSoldeC, $TotalSoldeD, $TotalSubFolioA, $TotalSubFolioB, $TotalSubFolioC, $TotalSubFolioD, $TotalFolios)
    {
        $this->ID_Member = $ID_Member;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->TotalSoldeA = $TotalSoldeA;
        $this->TotalSoldeB = $TotalSoldeB;
        $this->TotalSoldeC = $TotalSoldeC;
        $this->TotalSoldeD = $TotalSoldeD;
        $this->TotalSubFolioA = $TotalSubFolioA;
        $this->TotalSubFolioB = $TotalSubFolioB;
        $this->TotalSubFolioC = $TotalSubFolioC;
        $this->TotalSubFolioD = $TotalSubFolioD;
        $this->TotalFolios = $TotalFolios;
    }

    /**
     * @return string
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param string $AccountNo
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Member()
    {
        return $this->ID_Member;
    }

    /**
     * @param int $ID_Member
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return string
     */
    public function getResAccountNo()
    {
        return $this->ResAccountNo;
    }

    /**
     * @param string $ResAccountNo
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setResAccountNo($ResAccountNo)
    {
        $this->ResAccountNo = $ResAccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
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
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->Discriminator;
    }

    /**
     * @param string $Discriminator
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setDiscriminator($Discriminator)
    {
        $this->Discriminator = $Discriminator;
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
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
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
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSoldeA()
    {
        return $this->TotalSoldeA;
    }

    /**
     * @param float $TotalSoldeA
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSoldeA($TotalSoldeA)
    {
        $this->TotalSoldeA = $TotalSoldeA;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSoldeB()
    {
        return $this->TotalSoldeB;
    }

    /**
     * @param float $TotalSoldeB
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSoldeB($TotalSoldeB)
    {
        $this->TotalSoldeB = $TotalSoldeB;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSoldeC()
    {
        return $this->TotalSoldeC;
    }

    /**
     * @param float $TotalSoldeC
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSoldeC($TotalSoldeC)
    {
        $this->TotalSoldeC = $TotalSoldeC;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSoldeD()
    {
        return $this->TotalSoldeD;
    }

    /**
     * @param float $TotalSoldeD
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSoldeD($TotalSoldeD)
    {
        $this->TotalSoldeD = $TotalSoldeD;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSubFolioA()
    {
        return $this->TotalSubFolioA;
    }

    /**
     * @param float $TotalSubFolioA
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSubFolioA($TotalSubFolioA)
    {
        $this->TotalSubFolioA = $TotalSubFolioA;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSubFolioB()
    {
        return $this->TotalSubFolioB;
    }

    /**
     * @param float $TotalSubFolioB
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSubFolioB($TotalSubFolioB)
    {
        $this->TotalSubFolioB = $TotalSubFolioB;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSubFolioC()
    {
        return $this->TotalSubFolioC;
    }

    /**
     * @param float $TotalSubFolioC
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSubFolioC($TotalSubFolioC)
    {
        $this->TotalSubFolioC = $TotalSubFolioC;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSubFolioD()
    {
        return $this->TotalSubFolioD;
    }

    /**
     * @param float $TotalSubFolioD
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalSubFolioD($TotalSubFolioD)
    {
        $this->TotalSubFolioD = $TotalSubFolioD;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalFolios()
    {
        return $this->TotalFolios;
    }

    /**
     * @param float $TotalFolios
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setTotalFolios($TotalFolios)
    {
        $this->TotalFolios = $TotalFolios;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param string $AccountStatus
     * @return \Gueststream\PMS\IQWare\API\MemberReservation
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }
}
