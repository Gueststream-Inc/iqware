<?php

namespace Gueststream\PMS\IQWare\API;

class cReservationLinks
{

    /**
     * @var int $TravelAgentNo1
     */
    protected $TravelAgentNo1 = null;

    /**
     * @var int $TravelAgentNo2
     */
    protected $TravelAgentNo2 = null;

    /**
     * @var int $MemberNo1
     */
    protected $MemberNo1 = null;

    /**
     * @var int $MemberNo2
     */
    protected $MemberNo2 = null;

    /**
     * @var int $GroupNo
     */
    protected $GroupNo = null;

    /**
     * @var int $AllotmentNo
     */
    protected $AllotmentNo = null;

    /**
     * @var int $LinkMarketingNo
     */
    protected $LinkMarketingNo = null;

    /**
     * @var int $LinkProfileNo
     */
    protected $LinkProfileNo = null;

    /**
     * @var int $LinkAccountingNo
     */
    protected $LinkAccountingNo = null;

    /**
     * @var int $LinkStatisticNo
     */
    protected $LinkStatisticNo = null;

    /**
     * @param int $TravelAgentNo1
     * @param int $TravelAgentNo2
     * @param int $MemberNo1
     * @param int $MemberNo2
     * @param int $GroupNo
     * @param int $AllotmentNo
     * @param int $LinkMarketingNo
     * @param int $LinkProfileNo
     * @param int $LinkAccountingNo
     * @param int $LinkStatisticNo
     */
    public function __construct($TravelAgentNo1, $TravelAgentNo2, $MemberNo1, $MemberNo2, $GroupNo, $AllotmentNo, $LinkMarketingNo, $LinkProfileNo, $LinkAccountingNo, $LinkStatisticNo)
    {
        $this->TravelAgentNo1 = $TravelAgentNo1;
        $this->TravelAgentNo2 = $TravelAgentNo2;
        $this->MemberNo1 = $MemberNo1;
        $this->MemberNo2 = $MemberNo2;
        $this->GroupNo = $GroupNo;
        $this->AllotmentNo = $AllotmentNo;
        $this->LinkMarketingNo = $LinkMarketingNo;
        $this->LinkProfileNo = $LinkProfileNo;
        $this->LinkAccountingNo = $LinkAccountingNo;
        $this->LinkStatisticNo = $LinkStatisticNo;
    }

    /**
     * @return int
     */
    public function getTravelAgentNo1()
    {
        return $this->TravelAgentNo1;
    }

    /**
     * @param int $TravelAgentNo1
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setTravelAgentNo1($TravelAgentNo1)
    {
        $this->TravelAgentNo1 = $TravelAgentNo1;
        return $this;
    }

    /**
     * @return int
     */
    public function getTravelAgentNo2()
    {
        return $this->TravelAgentNo2;
    }

    /**
     * @param int $TravelAgentNo2
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setTravelAgentNo2($TravelAgentNo2)
    {
        $this->TravelAgentNo2 = $TravelAgentNo2;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberNo1()
    {
        return $this->MemberNo1;
    }

    /**
     * @param int $MemberNo1
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setMemberNo1($MemberNo1)
    {
        $this->MemberNo1 = $MemberNo1;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberNo2()
    {
        return $this->MemberNo2;
    }

    /**
     * @param int $MemberNo2
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setMemberNo2($MemberNo2)
    {
        $this->MemberNo2 = $MemberNo2;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupNo()
    {
        return $this->GroupNo;
    }

    /**
     * @param int $GroupNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setGroupNo($GroupNo)
    {
        $this->GroupNo = $GroupNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAllotmentNo()
    {
        return $this->AllotmentNo;
    }

    /**
     * @param int $AllotmentNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setAllotmentNo($AllotmentNo)
    {
        $this->AllotmentNo = $AllotmentNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkMarketingNo()
    {
        return $this->LinkMarketingNo;
    }

    /**
     * @param int $LinkMarketingNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setLinkMarketingNo($LinkMarketingNo)
    {
        $this->LinkMarketingNo = $LinkMarketingNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkProfileNo()
    {
        return $this->LinkProfileNo;
    }

    /**
     * @param int $LinkProfileNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setLinkProfileNo($LinkProfileNo)
    {
        $this->LinkProfileNo = $LinkProfileNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkAccountingNo()
    {
        return $this->LinkAccountingNo;
    }

    /**
     * @param int $LinkAccountingNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setLinkAccountingNo($LinkAccountingNo)
    {
        $this->LinkAccountingNo = $LinkAccountingNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkStatisticNo()
    {
        return $this->LinkStatisticNo;
    }

    /**
     * @param int $LinkStatisticNo
     * @return \Gueststream\PMS\IQWare\API\cReservationLinks
     */
    public function setLinkStatisticNo($LinkStatisticNo)
    {
        $this->LinkStatisticNo = $LinkStatisticNo;
        return $this;
    }
}
