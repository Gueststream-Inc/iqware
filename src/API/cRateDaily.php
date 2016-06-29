<?php

namespace Gueststream\PMS\IQWare\API;

class cRateDaily
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @param \DateTime $Date
     * @param int $ID_RateCode
     */
    public function __construct(\DateTime $Date, $ID_RateCode)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->ID_RateCode = $ID_RateCode;
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
     * @return \Gueststream\PMS\IQWare\API\cRateDaily
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\cRateDaily
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }
}
