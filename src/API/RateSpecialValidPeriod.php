<?php

namespace Gueststream\PMS\IQWare\API;

class RateSpecialValidPeriod
{

    /**
     * @var int $ID_RateSpecialValidPeriod
     */
    protected $ID_RateSpecialValidPeriod = null;

    /**
     * @var int $ID_RateSpecial
     */
    protected $ID_RateSpecial = null;

    /**
     * @var \DateTime $StartStay
     */
    protected $StartStay = null;

    /**
     * @var \DateTime $EndStay
     */
    protected $EndStay = null;

    /**
     * @var \DateTime $StartBooking
     */
    protected $StartBooking = null;

    /**
     * @var \DateTime $EndBooking
     */
    protected $EndBooking = null;

    /**
     * @var int $LengthStay
     */
    protected $LengthStay = null;

    /**
     * @var boolean $IsFixedStay
     */
    protected $IsFixedStay = null;

    /**
     * @var boolean $IsMonday
     */
    protected $IsMonday = null;

    /**
     * @var boolean $IsTuesday
     */
    protected $IsTuesday = null;

    /**
     * @var boolean $IsWednesday
     */
    protected $IsWednesday = null;

    /**
     * @var boolean $IsThursday
     */
    protected $IsThursday = null;

    /**
     * @var boolean $IsFriday
     */
    protected $IsFriday = null;

    /**
     * @var boolean $IsSaturday
     */
    protected $IsSaturday = null;

    /**
     * @var boolean $IsSunday
     */
    protected $IsSunday = null;

    /**
     * @param int $ID_RateSpecialValidPeriod
     * @param int $ID_RateSpecial
     * @param \DateTime $StartStay
     * @param \DateTime $EndStay
     * @param \DateTime $StartBooking
     * @param \DateTime $EndBooking
     * @param int $LengthStay
     * @param boolean $IsFixedStay
     * @param boolean $IsMonday
     * @param boolean $IsTuesday
     * @param boolean $IsWednesday
     * @param boolean $IsThursday
     * @param boolean $IsFriday
     * @param boolean $IsSaturday
     * @param boolean $IsSunday
     */
    public function __construct($ID_RateSpecialValidPeriod, $ID_RateSpecial, \DateTime $StartStay, \DateTime $EndStay, \DateTime $StartBooking, \DateTime $EndBooking, $LengthStay, $IsFixedStay, $IsMonday, $IsTuesday, $IsWednesday, $IsThursday, $IsFriday, $IsSaturday, $IsSunday)
    {
        $this->ID_RateSpecialValidPeriod = $ID_RateSpecialValidPeriod;
        $this->ID_RateSpecial = $ID_RateSpecial;
        $this->StartStay = $StartStay->format(\DateTime::ATOM);
        $this->EndStay = $EndStay->format(\DateTime::ATOM);
        $this->StartBooking = $StartBooking->format(\DateTime::ATOM);
        $this->EndBooking = $EndBooking->format(\DateTime::ATOM);
        $this->LengthStay = $LengthStay;
        $this->IsFixedStay = $IsFixedStay;
        $this->IsMonday = $IsMonday;
        $this->IsTuesday = $IsTuesday;
        $this->IsWednesday = $IsWednesday;
        $this->IsThursday = $IsThursday;
        $this->IsFriday = $IsFriday;
        $this->IsSaturday = $IsSaturday;
        $this->IsSunday = $IsSunday;
    }

    /**
     * @return int
     */
    public function getID_RateSpecialValidPeriod()
    {
        return $this->ID_RateSpecialValidPeriod;
    }

    /**
     * @param int $ID_RateSpecialValidPeriod
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setID_RateSpecialValidPeriod($ID_RateSpecialValidPeriod)
    {
        $this->ID_RateSpecialValidPeriod = $ID_RateSpecialValidPeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateSpecial()
    {
        return $this->ID_RateSpecial;
    }

    /**
     * @param int $ID_RateSpecial
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setID_RateSpecial($ID_RateSpecial)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartStay()
    {
        if ($this->StartStay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartStay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartStay
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setStartStay(\DateTime $StartStay)
    {
        $this->StartStay = $StartStay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndStay()
    {
        if ($this->EndStay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndStay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndStay
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setEndStay(\DateTime $EndStay)
    {
        $this->EndStay = $EndStay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartBooking()
    {
        if ($this->StartBooking == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartBooking);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartBooking
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setStartBooking(\DateTime $StartBooking)
    {
        $this->StartBooking = $StartBooking->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndBooking()
    {
        if ($this->EndBooking == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndBooking);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndBooking
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setEndBooking(\DateTime $EndBooking)
    {
        $this->EndBooking = $EndBooking->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getLengthStay()
    {
        return $this->LengthStay;
    }

    /**
     * @param int $LengthStay
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setLengthStay($LengthStay)
    {
        $this->LengthStay = $LengthStay;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFixedStay()
    {
        return $this->IsFixedStay;
    }

    /**
     * @param boolean $IsFixedStay
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsFixedStay($IsFixedStay)
    {
        $this->IsFixedStay = $IsFixedStay;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMonday()
    {
        return $this->IsMonday;
    }

    /**
     * @param boolean $IsMonday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsMonday($IsMonday)
    {
        $this->IsMonday = $IsMonday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTuesday()
    {
        return $this->IsTuesday;
    }

    /**
     * @param boolean $IsTuesday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsTuesday($IsTuesday)
    {
        $this->IsTuesday = $IsTuesday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWednesday()
    {
        return $this->IsWednesday;
    }

    /**
     * @param boolean $IsWednesday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsWednesday($IsWednesday)
    {
        $this->IsWednesday = $IsWednesday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsThursday()
    {
        return $this->IsThursday;
    }

    /**
     * @param boolean $IsThursday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsThursday($IsThursday)
    {
        $this->IsThursday = $IsThursday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFriday()
    {
        return $this->IsFriday;
    }

    /**
     * @param boolean $IsFriday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsFriday($IsFriday)
    {
        $this->IsFriday = $IsFriday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSaturday()
    {
        return $this->IsSaturday;
    }

    /**
     * @param boolean $IsSaturday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsSaturday($IsSaturday)
    {
        $this->IsSaturday = $IsSaturday;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSunday()
    {
        return $this->IsSunday;
    }

    /**
     * @param boolean $IsSunday
     * @return \Gueststream\PMS\IQWare\API\RateSpecialValidPeriod
     */
    public function setIsSunday($IsSunday)
    {
        $this->IsSunday = $IsSunday;
        return $this;
    }
}
