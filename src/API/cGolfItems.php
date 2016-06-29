<?php

namespace Gueststream\PMS\IQWare\API;

class cGolfItems
{

    /**
     * @var int $ID_ServiceCharge
     */
    protected $ID_ServiceCharge = null;

    /**
     * @var string $TlinksID
     */
    protected $TlinksID = null;

    /**
     * @var string $CourseName
     */
    protected $CourseName = null;

    /**
     * @var int $GolfersCount
     */
    protected $GolfersCount = null;

    /**
     * @var \DateTime $TeeDateTime
     */
    protected $TeeDateTime = null;

    /**
     * @var int $StartingTeeNumber
     */
    protected $StartingTeeNumber = null;

    /**
     * @var float $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @param int $ID_ServiceCharge
     * @param int $GolfersCount
     * @param \DateTime $TeeDateTime
     * @param int $StartingTeeNumber
     * @param float $TotalAmount
     */
    public function __construct($ID_ServiceCharge, $GolfersCount, \DateTime $TeeDateTime, $StartingTeeNumber, $TotalAmount)
    {
        $this->ID_ServiceCharge = $ID_ServiceCharge;
        $this->GolfersCount = $GolfersCount;
        $this->TeeDateTime = $TeeDateTime->format(\DateTime::ATOM);
        $this->StartingTeeNumber = $StartingTeeNumber;
        $this->TotalAmount = $TotalAmount;
    }

    /**
     * @return int
     */
    public function getID_ServiceCharge()
    {
        return $this->ID_ServiceCharge;
    }

    /**
     * @param int $ID_ServiceCharge
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setID_ServiceCharge($ID_ServiceCharge)
    {
        $this->ID_ServiceCharge = $ID_ServiceCharge;
        return $this;
    }

    /**
     * @return string
     */
    public function getTlinksID()
    {
        return $this->TlinksID;
    }

    /**
     * @param string $TlinksID
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setTlinksID($TlinksID)
    {
        $this->TlinksID = $TlinksID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCourseName()
    {
        return $this->CourseName;
    }

    /**
     * @param string $CourseName
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setCourseName($CourseName)
    {
        $this->CourseName = $CourseName;
        return $this;
    }

    /**
     * @return int
     */
    public function getGolfersCount()
    {
        return $this->GolfersCount;
    }

    /**
     * @param int $GolfersCount
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setGolfersCount($GolfersCount)
    {
        $this->GolfersCount = $GolfersCount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTeeDateTime()
    {
        if ($this->TeeDateTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TeeDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TeeDateTime
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setTeeDateTime(\DateTime $TeeDateTime)
    {
        $this->TeeDateTime = $TeeDateTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getStartingTeeNumber()
    {
        return $this->StartingTeeNumber;
    }

    /**
     * @param int $StartingTeeNumber
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setStartingTeeNumber($StartingTeeNumber)
    {
        $this->StartingTeeNumber = $StartingTeeNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param float $TotalAmount
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Gueststream\PMS\IQWare\API\cGolfItems
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }
}
