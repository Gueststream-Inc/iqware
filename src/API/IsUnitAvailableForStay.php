<?php

namespace Gueststream\PMS\IQWare\API;

class IsUnitAvailableForStay
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var \DateTime $dtArrival
     */
    protected $dtArrival = null;

    /**
     * @var \DateTime $dtDeparture
     */
    protected $dtDeparture = null;

    /**
     * @param int $guid
     * @param int $ID_Room
     * @param \DateTime $dtArrival
     * @param \DateTime $dtDeparture
     */
    public function __construct($guid, $ID_Room, \DateTime $dtArrival, \DateTime $dtDeparture)
    {
        $this->guid = $guid;
        $this->ID_Room = $ID_Room;
        $this->dtArrival = $dtArrival->format(\DateTime::ATOM);
        $this->dtDeparture = $dtDeparture->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\IsUnitAvailableForStay
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\IsUnitAvailableForStay
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtArrival()
    {
        if ($this->dtArrival == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtArrival);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtArrival
     * @return \Gueststream\PMS\IQWare\API\IsUnitAvailableForStay
     */
    public function setDtArrival(\DateTime $dtArrival)
    {
        $this->dtArrival = $dtArrival->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtDeparture()
    {
        if ($this->dtDeparture == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtDeparture);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtDeparture
     * @return \Gueststream\PMS\IQWare\API\IsUnitAvailableForStay
     */
    public function setDtDeparture(\DateTime $dtDeparture)
    {
        $this->dtDeparture = $dtDeparture->format(\DateTime::ATOM);
        return $this;
    }
}
