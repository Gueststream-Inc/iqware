<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoMonthlyStatsResponse
{

    /**
     * @var WebRes_GetCondoMonthlyStatsResult $WebRes_GetCondoMonthlyStatsResult
     */
    protected $WebRes_GetCondoMonthlyStatsResult = null;

    /**
     * @var boolean $isLeaseBack
     */
    protected $isLeaseBack = null;

    /**
     * @var boolean $IsDailyDistrib
     */
    protected $IsDailyDistrib = null;

    /**
     * @var float $MonthlyOwnerPct
     */
    protected $MonthlyOwnerPct = null;

    /**
     * @var float $AmountLeaseBack
     */
    protected $AmountLeaseBack = null;

    /**
     * @param WebRes_GetCondoMonthlyStatsResult $WebRes_GetCondoMonthlyStatsResult
     * @param boolean $isLeaseBack
     * @param boolean $IsDailyDistrib
     * @param float $MonthlyOwnerPct
     * @param float $AmountLeaseBack
     */
    public function __construct($WebRes_GetCondoMonthlyStatsResult, $isLeaseBack, $IsDailyDistrib, $MonthlyOwnerPct, $AmountLeaseBack)
    {
        $this->WebRes_GetCondoMonthlyStatsResult = $WebRes_GetCondoMonthlyStatsResult;
        $this->isLeaseBack = $isLeaseBack;
        $this->IsDailyDistrib = $IsDailyDistrib;
        $this->MonthlyOwnerPct = $MonthlyOwnerPct;
        $this->AmountLeaseBack = $AmountLeaseBack;
    }

    /**
     * @return WebRes_GetCondoMonthlyStatsResult
     */
    public function getWebRes_GetCondoMonthlyStatsResult()
    {
        return $this->WebRes_GetCondoMonthlyStatsResult;
    }

    /**
     * @param WebRes_GetCondoMonthlyStatsResult $WebRes_GetCondoMonthlyStatsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStatsResponse
     */
    public function setWebRes_GetCondoMonthlyStatsResult($WebRes_GetCondoMonthlyStatsResult)
    {
        $this->WebRes_GetCondoMonthlyStatsResult = $WebRes_GetCondoMonthlyStatsResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLeaseBack()
    {
        return $this->isLeaseBack;
    }

    /**
     * @param boolean $isLeaseBack
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStatsResponse
     */
    public function setIsLeaseBack($isLeaseBack)
    {
        $this->isLeaseBack = $isLeaseBack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDailyDistrib()
    {
        return $this->IsDailyDistrib;
    }

    /**
     * @param boolean $IsDailyDistrib
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStatsResponse
     */
    public function setIsDailyDistrib($IsDailyDistrib)
    {
        $this->IsDailyDistrib = $IsDailyDistrib;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonthlyOwnerPct()
    {
        return $this->MonthlyOwnerPct;
    }

    /**
     * @param float $MonthlyOwnerPct
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStatsResponse
     */
    public function setMonthlyOwnerPct($MonthlyOwnerPct)
    {
        $this->MonthlyOwnerPct = $MonthlyOwnerPct;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountLeaseBack()
    {
        return $this->AmountLeaseBack;
    }

    /**
     * @param float $AmountLeaseBack
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoMonthlyStatsResponse
     */
    public function setAmountLeaseBack($AmountLeaseBack)
    {
        $this->AmountLeaseBack = $AmountLeaseBack;
        return $this;
    }
}
