<?php

namespace Gueststream\PMS\IQWare\API;

class Details
{

    /**
     * @var \DateTime $Day
     */
    protected $Day = null;

    /**
     * @var int $UnitsAvailable
     */
    protected $UnitsAvailable = null;

    /**
     * @var int $UnitsGuaranteed
     */
    protected $UnitsGuaranteed = null;

    /**
     * @var int $UnitsNonGuaranteed
     */
    protected $UnitsNonGuaranteed = null;

    /**
     * @param \DateTime $Day
     * @param int $UnitsAvailable
     * @param int $UnitsGuaranteed
     * @param int $UnitsNonGuaranteed
     */
    public function __construct(\DateTime $Day, $UnitsAvailable, $UnitsGuaranteed, $UnitsNonGuaranteed)
    {
        $this->Day = $Day->format(\DateTime::ATOM);
        $this->UnitsAvailable = $UnitsAvailable;
        $this->UnitsGuaranteed = $UnitsGuaranteed;
        $this->UnitsNonGuaranteed = $UnitsNonGuaranteed;
    }

    /**
     * @return \DateTime
     */
    public function getDay()
    {
        if ($this->Day == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Day);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Day
     * @return \Gueststream\PMS\IQWare\API\Details
     */
    public function setDay(\DateTime $Day)
    {
        $this->Day = $Day->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsAvailable()
    {
        return $this->UnitsAvailable;
    }

    /**
     * @param int $UnitsAvailable
     * @return \Gueststream\PMS\IQWare\API\Details
     */
    public function setUnitsAvailable($UnitsAvailable)
    {
        $this->UnitsAvailable = $UnitsAvailable;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsGuaranteed()
    {
        return $this->UnitsGuaranteed;
    }

    /**
     * @param int $UnitsGuaranteed
     * @return \Gueststream\PMS\IQWare\API\Details
     */
    public function setUnitsGuaranteed($UnitsGuaranteed)
    {
        $this->UnitsGuaranteed = $UnitsGuaranteed;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsNonGuaranteed()
    {
        return $this->UnitsNonGuaranteed;
    }

    /**
     * @param int $UnitsNonGuaranteed
     * @return \Gueststream\PMS\IQWare\API\Details
     */
    public function setUnitsNonGuaranteed($UnitsNonGuaranteed)
    {
        $this->UnitsNonGuaranteed = $UnitsNonGuaranteed;
        return $this;
    }
}
