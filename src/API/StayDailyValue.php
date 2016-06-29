<?php

namespace Gueststream\PMS\IQWare\API;

class StayDailyValue
{

    /**
     * @var float $AmountOthers
     */
    protected $AmountOthers = null;

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $ID_Stay
     */
    protected $ID_Stay = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AmountTax
     */
    protected $AmountTax = null;

    /**
     * @param float $AmountOthers
     * @param int $GUID
     * @param int $ID_Stay
     * @param \DateTime $Date
     * @param float $Amount
     * @param float $AmountTax
     */
    public function __construct($AmountOthers, $GUID, $ID_Stay, \DateTime $Date, $Amount, $AmountTax)
    {
        $this->AmountOthers = $AmountOthers;
        $this->GUID = $GUID;
        $this->ID_Stay = $ID_Stay;
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Amount = $Amount;
        $this->AmountTax = $AmountTax;
    }

    /**
     * @return float
     */
    public function getAmountOthers()
    {
        return $this->AmountOthers;
    }

    /**
     * @param float $AmountOthers
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setAmountOthers($AmountOthers)
    {
        $this->AmountOthers = $AmountOthers;
        return $this;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Stay()
    {
        return $this->ID_Stay;
    }

    /**
     * @param int $ID_Stay
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setID_Stay($ID_Stay)
    {
        $this->ID_Stay = $ID_Stay;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTax()
    {
        return $this->AmountTax;
    }

    /**
     * @param float $AmountTax
     * @return \Gueststream\PMS\IQWare\API\StayDailyValue
     */
    public function setAmountTax($AmountTax)
    {
        $this->AmountTax = $AmountTax;
        return $this;
    }
}
