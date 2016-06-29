<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetRestrictions
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var \DateTime $start
     */
    protected $start = null;

    /**
     * @var \DateTime $end
     */
    protected $end = null;

    /**
     * @var string $strRateCodeIDs
     */
    protected $strRateCodeIDs = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @param int $intGUID
     * @param \DateTime $start
     * @param \DateTime $end
     * @param string $strRateCodeIDs
     * @param string $strRoomTypeIDs
     */
    public function __construct($intGUID, \DateTime $start, \DateTime $end, $strRateCodeIDs, $strRoomTypeIDs)
    {
        $this->intGUID = $intGUID;
        $this->start = $start->format(\DateTime::ATOM);
        $this->end = $end->format(\DateTime::ATOM);
        $this->strRateCodeIDs = $strRateCodeIDs;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictions
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        if ($this->start == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->start);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $start
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictions
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        if ($this->end == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->end);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $end
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictions
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCodeIDs()
    {
        return $this->strRateCodeIDs;
    }

    /**
     * @param string $strRateCodeIDs
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictions
     */
    public function setStrRateCodeIDs($strRateCodeIDs)
    {
        $this->strRateCodeIDs = $strRateCodeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypeIDs()
    {
        return $this->strRoomTypeIDs;
    }

    /**
     * @param string $strRoomTypeIDs
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictions
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }
}
