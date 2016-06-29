<?php

namespace Gueststream\PMS\IQWare\API;

class SpecialOfferByDay
{

    /**
     * @var \DateTime $TheDate
     */
    protected $TheDate = null;

    /**
     * @var int $ID_Code
     */
    protected $ID_Code = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param \DateTime $TheDate
     * @param int $ID_Code
     * @param float $Amount
     */
    public function __construct(\DateTime $TheDate, $ID_Code, $Amount)
    {
        $this->TheDate = $TheDate->format(\DateTime::ATOM);
        $this->ID_Code = $ID_Code;
        $this->Amount = $Amount;
    }

    /**
     * @return \DateTime
     */
    public function getTheDate()
    {
        if ($this->TheDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TheDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TheDate
     * @return \Gueststream\PMS\IQWare\API\SpecialOfferByDay
     */
    public function setTheDate(\DateTime $TheDate)
    {
        $this->TheDate = $TheDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Code()
    {
        return $this->ID_Code;
    }

    /**
     * @param int $ID_Code
     * @return \Gueststream\PMS\IQWare\API\SpecialOfferByDay
     */
    public function setID_Code($ID_Code)
    {
        $this->ID_Code = $ID_Code;
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
     * @return \Gueststream\PMS\IQWare\API\SpecialOfferByDay
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }
}
