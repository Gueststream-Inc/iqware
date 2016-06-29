<?php

namespace Gueststream\PMS\IQWare\API;

class Reservations
{

    /**
     * @var int $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @param int $ConfirmationNo
     * @param string $Name
     * @param \DateTime $CreationDate
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $AccountStatus
     */
    public function __construct($ConfirmationNo, $Name, \DateTime $CreationDate, \DateTime $ArrivalDate, \DateTime $DepartureDate, $AccountStatus)
    {
        $this->ConfirmationNo = $ConfirmationNo;
        $this->Name = $Name;
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->AccountStatus = $AccountStatus;
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
     * @return \Gueststream\PMS\IQWare\API\Reservations
     */
    public function setConfirmationNo($ConfirmationNo)
    {
        $this->ConfirmationNo = $ConfirmationNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Gueststream\PMS\IQWare\API\Reservations
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->CreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \Gueststream\PMS\IQWare\API\Reservations
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\Reservations
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
     * @return \Gueststream\PMS\IQWare\API\Reservations
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\Reservations
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }
}
