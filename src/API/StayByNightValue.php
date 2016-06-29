<?php

namespace Gueststream\PMS\IQWare\API;

class StayByNightValue
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $Night
     */
    protected $Night = null;

    /**
     * @var float $NightRate
     */
    protected $NightRate = null;

    /**
     * @var float $NightRateBase
     */
    protected $NightRateBase = null;

    /**
     * @var float $NightOthers
     */
    protected $NightOthers = null;

    /**
     * @var float $NightTaxes
     */
    protected $NightTaxes = null;

    /**
     * @var float $NightTotal
     */
    protected $NightTotal = null;

    /**
     * @var float $NightRateSpecial
     */
    protected $NightRateSpecial = null;

    /**
     * @var float $NightYeildReference
     */
    protected $NightYeildReference = null;

    /**
     * @param \DateTime $Date
     * @param int $Night
     * @param float $NightRate
     * @param float $NightRateBase
     * @param float $NightOthers
     * @param float $NightTaxes
     * @param float $NightTotal
     * @param float $NightRateSpecial
     * @param float $NightYeildReference
     */
    public function __construct(\DateTime $Date, $Night, $NightRate, $NightRateBase, $NightOthers, $NightTaxes, $NightTotal, $NightRateSpecial, $NightYeildReference)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Night = $Night;
        $this->NightRate = $NightRate;
        $this->NightRateBase = $NightRateBase;
        $this->NightOthers = $NightOthers;
        $this->NightTaxes = $NightTaxes;
        $this->NightTotal = $NightTotal;
        $this->NightRateSpecial = $NightRateSpecial;
        $this->NightYeildReference = $NightYeildReference;
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
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getNight()
    {
        return $this->Night;
    }

    /**
     * @param int $Night
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNight($Night)
    {
        $this->Night = $Night;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightRate()
    {
        return $this->NightRate;
    }

    /**
     * @param float $NightRate
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightRate($NightRate)
    {
        $this->NightRate = $NightRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightRateBase()
    {
        return $this->NightRateBase;
    }

    /**
     * @param float $NightRateBase
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightRateBase($NightRateBase)
    {
        $this->NightRateBase = $NightRateBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightOthers()
    {
        return $this->NightOthers;
    }

    /**
     * @param float $NightOthers
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightOthers($NightOthers)
    {
        $this->NightOthers = $NightOthers;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightTaxes()
    {
        return $this->NightTaxes;
    }

    /**
     * @param float $NightTaxes
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightTaxes($NightTaxes)
    {
        $this->NightTaxes = $NightTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightTotal()
    {
        return $this->NightTotal;
    }

    /**
     * @param float $NightTotal
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightTotal($NightTotal)
    {
        $this->NightTotal = $NightTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightRateSpecial()
    {
        return $this->NightRateSpecial;
    }

    /**
     * @param float $NightRateSpecial
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightRateSpecial($NightRateSpecial)
    {
        $this->NightRateSpecial = $NightRateSpecial;
        return $this;
    }

    /**
     * @return float
     */
    public function getNightYeildReference()
    {
        return $this->NightYeildReference;
    }

    /**
     * @param float $NightYeildReference
     * @return \Gueststream\PMS\IQWare\API\StayByNightValue
     */
    public function setNightYeildReference($NightYeildReference)
    {
        $this->NightYeildReference = $NightYeildReference;
        return $this;
    }
}
