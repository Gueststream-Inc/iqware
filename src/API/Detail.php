<?php

namespace Gueststream\PMS\IQWare\API;

class Detail
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $IsPecent
     */
    protected $IsPecent = null;

    /**
     * @param \DateTime $Date
     * @param float $Amount
     * @param boolean $IsPecent
     */
    public function __construct(\DateTime $Date, $Amount, $IsPecent)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Amount = $Amount;
        $this->IsPecent = $IsPecent;
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
     * @return \Gueststream\PMS\IQWare\API\Detail
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
     * @return \Gueststream\PMS\IQWare\API\Detail
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPecent()
    {
        return $this->IsPecent;
    }

    /**
     * @param boolean $IsPecent
     * @return \Gueststream\PMS\IQWare\API\Detail
     */
    public function setIsPecent($IsPecent)
    {
        $this->IsPecent = $IsPecent;
        return $this;
    }
}
