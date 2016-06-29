<?php

namespace Gueststream\PMS\IQWare\API;

class cInfo
{

    /**
     * @var boolean $IsMarried
     */
    protected $IsMarried = null;

    /**
     * @var int $Sex
     */
    protected $Sex = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $PassportID
     */
    protected $PassportID = null;

    /**
     * @var int $ID_Nationality
     */
    protected $ID_Nationality = null;

    /**
     * @var string $PassportIssuingLocation
     */
    protected $PassportIssuingLocation = null;

    /**
     * @var \DateTime $PassportExpireDate
     */
    protected $PassportExpireDate = null;

    /**
     * @param boolean $IsMarried
     * @param int $Sex
     * @param \DateTime $DateOfBirth
     * @param int $ID_Nationality
     * @param \DateTime $PassportExpireDate
     */
    public function __construct($IsMarried, $Sex, \DateTime $DateOfBirth, $ID_Nationality, \DateTime $PassportExpireDate)
    {
        $this->IsMarried = $IsMarried;
        $this->Sex = $Sex;
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
        $this->ID_Nationality = $ID_Nationality;
        $this->PassportExpireDate = $PassportExpireDate->format(\DateTime::ATOM);
    }

    /**
     * @return boolean
     */
    public function getIsMarried()
    {
        return $this->IsMarried;
    }

    /**
     * @param boolean $IsMarried
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setIsMarried($IsMarried)
    {
        $this->IsMarried = $IsMarried;
        return $this;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param int $Sex
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        if ($this->DateOfBirth == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateOfBirth);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setDateOfBirth(\DateTime $DateOfBirth)
    {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportID()
    {
        return $this->PassportID;
    }

    /**
     * @param string $PassportID
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setPassportID($PassportID)
    {
        $this->PassportID = $PassportID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Nationality()
    {
        return $this->ID_Nationality;
    }

    /**
     * @param int $ID_Nationality
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setID_Nationality($ID_Nationality)
    {
        $this->ID_Nationality = $ID_Nationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportIssuingLocation()
    {
        return $this->PassportIssuingLocation;
    }

    /**
     * @param string $PassportIssuingLocation
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setPassportIssuingLocation($PassportIssuingLocation)
    {
        $this->PassportIssuingLocation = $PassportIssuingLocation;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPassportExpireDate()
    {
        if ($this->PassportExpireDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PassportExpireDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PassportExpireDate
     * @return \Gueststream\PMS\IQWare\API\cInfo
     */
    public function setPassportExpireDate(\DateTime $PassportExpireDate)
    {
        $this->PassportExpireDate = $PassportExpireDate->format(\DateTime::ATOM);
        return $this;
    }
}
