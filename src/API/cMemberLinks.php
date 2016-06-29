<?php

namespace Gueststream\PMS\IQWare\API;

class cMemberLinks
{

    /**
     * @var int $CompanyNo
     */
    protected $CompanyNo = null;

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
     * @param int $CompanyNo
     * @param int $LinkMarketingNo
     * @param int $LinkProfileNo
     * @param int $LinkAccountingNo
     * @param int $LinkStatisticNo
     */
    public function __construct($CompanyNo, $LinkMarketingNo, $LinkProfileNo, $LinkAccountingNo, $LinkStatisticNo)
    {
        $this->CompanyNo = $CompanyNo;
        $this->LinkMarketingNo = $LinkMarketingNo;
        $this->LinkProfileNo = $LinkProfileNo;
        $this->LinkAccountingNo = $LinkAccountingNo;
        $this->LinkStatisticNo = $LinkStatisticNo;
    }

    /**
     * @return int
     */
    public function getCompanyNo()
    {
        return $this->CompanyNo;
    }

    /**
     * @param int $CompanyNo
     * @return \Gueststream\PMS\IQWare\API\cMemberLinks
     */
    public function setCompanyNo($CompanyNo)
    {
        $this->CompanyNo = $CompanyNo;
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
     * @return \Gueststream\PMS\IQWare\API\cMemberLinks
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
     * @return \Gueststream\PMS\IQWare\API\cMemberLinks
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
     * @return \Gueststream\PMS\IQWare\API\cMemberLinks
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
     * @return \Gueststream\PMS\IQWare\API\cMemberLinks
     */
    public function setLinkStatisticNo($LinkStatisticNo)
    {
        $this->LinkStatisticNo = $LinkStatisticNo;
        return $this;
    }
}
