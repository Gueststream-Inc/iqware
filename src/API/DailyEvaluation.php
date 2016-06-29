<?php

namespace Gueststream\PMS\IQWare\API;

class DailyEvaluation
{

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
     * @var float $AmountTaxes
     */
    protected $AmountTaxes = null;

    /**
     * @var float $AmountTotal
     */
    protected $AmountTotal = null;

    /**
     * @var float $AmountOthers
     */
    protected $AmountOthers = null;

    /**
     * @param int $ID_Stay
     * @param \DateTime $Date
     * @param float $Amount
     * @param float $AmountTaxes
     * @param float $AmountTotal
     * @param float $AmountOthers
     */
    public function __construct($ID_Stay, \DateTime $Date, $Amount, $AmountTaxes, $AmountTotal, $AmountOthers)
    {
        $this->ID_Stay = $ID_Stay;
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Amount = $Amount;
        $this->AmountTaxes = $AmountTaxes;
        $this->AmountTotal = $AmountTotal;
        $this->AmountOthers = $AmountOthers;
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
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTaxes()
    {
        return $this->AmountTaxes;
    }

    /**
     * @param float $AmountTaxes
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
     */
    public function setAmountTaxes($AmountTaxes)
    {
        $this->AmountTaxes = $AmountTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTotal()
    {
        return $this->AmountTotal;
    }

    /**
     * @param float $AmountTotal
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
     */
    public function setAmountTotal($AmountTotal)
    {
        $this->AmountTotal = $AmountTotal;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\DailyEvaluation
     */
    public function setAmountOthers($AmountOthers)
    {
        $this->AmountOthers = $AmountOthers;
        return $this;
    }
}
