<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetInventory
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
     * @var boolean $isSuite
     */
    protected $isSuite = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @var string $strISOLanguageCode
     */
    protected $strISOLanguageCode = null;

    /**
     * @param int $intGUID
     * @param \DateTime $start
     * @param \DateTime $end
     * @param boolean $isSuite
     * @param string $strRoomTypeIDs
     * @param string $strISOLanguageCode
     */
    public function __construct($intGUID, \DateTime $start, \DateTime $end, $isSuite, $strRoomTypeIDs, $strISOLanguageCode)
    {
        $this->intGUID = $intGUID;
        $this->start = $start->format(\DateTime::ATOM);
        $this->end = $end->format(\DateTime::ATOM);
        $this->isSuite = $isSuite;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        $this->strISOLanguageCode = $strISOLanguageCode;
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
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
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
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
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
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuite()
    {
        return $this->isSuite;
    }

    /**
     * @param boolean $isSuite
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
     */
    public function setIsSuite($isSuite)
    {
        $this->isSuite = $isSuite;
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
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguageCode()
    {
        return $this->strISOLanguageCode;
    }

    /**
     * @param string $strISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventory
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
        $this->strISOLanguageCode = $strISOLanguageCode;
        return $this;
    }
}
