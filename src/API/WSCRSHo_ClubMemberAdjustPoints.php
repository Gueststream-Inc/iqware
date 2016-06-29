<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberAdjustPoints
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @var int $AdjustValue
     */
    protected $AdjustValue = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @var \DateTime $DateAdjust
     */
    protected $DateAdjust = null;

    /**
     * @param int $GUID
     * @param int $AccountNo
     * @param int $ClubNo
     * @param int $AdjustValue
     * @param string $Reason
     * @param \DateTime $DateAdjust
     */
    public function __construct($GUID, $AccountNo, $ClubNo, $AdjustValue, $Reason, \DateTime $DateAdjust)
    {
        $this->GUID = $GUID;
        $this->AccountNo = $AccountNo;
        $this->ClubNo = $ClubNo;
        $this->AdjustValue = $AdjustValue;
        $this->Reason = $Reason;
        $this->DateAdjust = $DateAdjust->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getClubNo()
    {
        return $this->ClubNo;
    }

    /**
     * @param int $ClubNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setClubNo($ClubNo)
    {
        $this->ClubNo = $ClubNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdjustValue()
    {
        return $this->AdjustValue;
    }

    /**
     * @param int $AdjustValue
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setAdjustValue($AdjustValue)
    {
        $this->AdjustValue = $AdjustValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setReason($Reason)
    {
        $this->Reason = $Reason;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdjust()
    {
        if ($this->DateAdjust == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateAdjust);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateAdjust
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberAdjustPoints
     */
    public function setDateAdjust(\DateTime $DateAdjust)
    {
        $this->DateAdjust = $DateAdjust->format(\DateTime::ATOM);
        return $this;
    }
}
