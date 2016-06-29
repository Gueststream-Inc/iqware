<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoMonthlyStats
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var CondoActivityTypeEnum $CondoActivityType
     */
    protected $CondoActivityType = null;

    /**
     * @var \DateTime $ReportEOMDate
     */
    protected $ReportEOMDate = null;

    /**
     * @param int $guid
     * @param int $ID_CondoOwner
     * @param CondoActivityTypeEnum $CondoActivityType
     * @param \DateTime $ReportEOMDate
     */
    public function __construct($guid, $ID_CondoOwner, $CondoActivityType, \DateTime $ReportEOMDate)
    {
        $this->guid = $guid;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->CondoActivityType = $CondoActivityType;
        $this->ReportEOMDate = $ReportEOMDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStats
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStats
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return CondoActivityTypeEnum
     */
    public function getCondoActivityType()
    {
        return $this->CondoActivityType;
    }

    /**
     * @param CondoActivityTypeEnum $CondoActivityType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStats
     */
    public function setCondoActivityType($CondoActivityType)
    {
        $this->CondoActivityType = $CondoActivityType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReportEOMDate()
    {
        if ($this->ReportEOMDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReportEOMDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReportEOMDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStats
     */
    public function setReportEOMDate(\DateTime $ReportEOMDate)
    {
        $this->ReportEOMDate = $ReportEOMDate->format(\DateTime::ATOM);
        return $this;
    }
}
