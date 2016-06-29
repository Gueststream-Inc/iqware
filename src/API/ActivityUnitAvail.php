<?php

namespace Gueststream\PMS\IQWare\API;

class ActivityUnitAvail
{

    /**
     * @var int $ID_ActivityUnit
     */
    protected $ID_ActivityUnit = null;

    /**
     * @var \DateTime $aDate
     */
    protected $aDate = null;

    /**
     * @var TActUnitStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $ID_Element
     */
    protected $ID_Element = null;

    /**
     * @var int $nbPersPerElem
     */
    protected $nbPersPerElem = null;

    /**
     * @var boolean $IsDepDayElem
     */
    protected $IsDepDayElem = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param int $ID_ActivityUnit
     * @param \DateTime $aDate
     * @param TActUnitStatus $Status
     * @param int $ID_Element
     * @param int $nbPersPerElem
     * @param boolean $IsDepDayElem
     * @param float $Amount
     */
    public function __construct($ID_ActivityUnit, \DateTime $aDate, $Status, $ID_Element, $nbPersPerElem, $IsDepDayElem, $Amount)
    {
        $this->ID_ActivityUnit = $ID_ActivityUnit;
        $this->aDate = $aDate->format(\DateTime::ATOM);
        $this->Status = $Status;
        $this->ID_Element = $ID_Element;
        $this->nbPersPerElem = $nbPersPerElem;
        $this->IsDepDayElem = $IsDepDayElem;
        $this->Amount = $Amount;
    }

    /**
     * @return int
     */
    public function getID_ActivityUnit()
    {
        return $this->ID_ActivityUnit;
    }

    /**
     * @param int $ID_ActivityUnit
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setID_ActivityUnit($ID_ActivityUnit)
    {
        $this->ID_ActivityUnit = $ID_ActivityUnit;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->aDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->aDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $aDate
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setADate(\DateTime $aDate)
    {
        $this->aDate = $aDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TActUnitStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param TActUnitStatus $Status
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Element()
    {
        return $this->ID_Element;
    }

    /**
     * @param int $ID_Element
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setID_Element($ID_Element)
    {
        $this->ID_Element = $ID_Element;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbPersPerElem()
    {
        return $this->nbPersPerElem;
    }

    /**
     * @param int $nbPersPerElem
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setNbPersPerElem($nbPersPerElem)
    {
        $this->nbPersPerElem = $nbPersPerElem;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDepDayElem()
    {
        return $this->IsDepDayElem;
    }

    /**
     * @param boolean $IsDepDayElem
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setIsDepDayElem($IsDepDayElem)
    {
        $this->IsDepDayElem = $IsDepDayElem;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Gueststream\PMS\IQWare\API\ActivityUnitAvail
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }
}
