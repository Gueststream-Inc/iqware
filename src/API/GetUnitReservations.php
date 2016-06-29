<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitReservations
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $ID_Admin
     */
    protected $ID_Admin = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param int $intGUID
     * @param string $userName
     * @param string $password
     * @param int $ID_CondoOwner
     * @param int $ID_Admin
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     */
    public function __construct($intGUID, $userName, $password, $ID_CondoOwner, $ID_Admin, \DateTime $StartDate, \DateTime $EndDate)
    {
        $this->intGUID = $intGUID;
        $this->userName = $userName;
        $this->password = $password;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->ID_Admin = $ID_Admin;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Admin()
    {
        return $this->ID_Admin;
    }

    /**
     * @param int $ID_Admin
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setID_Admin($ID_Admin)
    {
        $this->ID_Admin = $ID_Admin;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservations
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }
}
