<?php

namespace Gueststream\PMS\IQWare\API;

class ContractSegments
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var string $QuaterName
     */
    protected $QuaterName = null;

    /**
     * @var \DateTime $FromDateWeek
     */
    protected $FromDateWeek = null;

    /**
     * @var \DateTime $ToDateWeek
     */
    protected $ToDateWeek = null;

    /**
     * @param int $ID_CondoOwner
     * @param string $QuaterName
     * @param \DateTime $FromDateWeek
     * @param \DateTime $ToDateWeek
     */
    public function __construct($ID_CondoOwner, $QuaterName, \DateTime $FromDateWeek, \DateTime $ToDateWeek)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->QuaterName = $QuaterName;
        $this->FromDateWeek = $FromDateWeek->format(\DateTime::ATOM);
        $this->ToDateWeek = $ToDateWeek->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\ContractSegments
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuaterName()
    {
        return $this->QuaterName;
    }

    /**
     * @param string $QuaterName
     * @return \Gueststream\PMS\IQWare\API\ContractSegments
     */
    public function setQuaterName($QuaterName)
    {
        $this->QuaterName = $QuaterName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDateWeek()
    {
        if ($this->FromDateWeek == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FromDateWeek);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDateWeek
     * @return \Gueststream\PMS\IQWare\API\ContractSegments
     */
    public function setFromDateWeek(\DateTime $FromDateWeek)
    {
        $this->FromDateWeek = $FromDateWeek->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDateWeek()
    {
        if ($this->ToDateWeek == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ToDateWeek);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ToDateWeek
     * @return \Gueststream\PMS\IQWare\API\ContractSegments
     */
    public function setToDateWeek(\DateTime $ToDateWeek)
    {
        $this->ToDateWeek = $ToDateWeek->format(\DateTime::ATOM);
        return $this;
    }
}
