<?php

namespace Gueststream\PMS\IQWare\API;

class DstCondoOwnerMonthlyStats
{

    /**
     * @var ChequeDetail $ChequeDetail
     */
    protected $ChequeDetail = null;

    /**
     * @var ChequeTotal $ChequeTotal
     */
    protected $ChequeTotal = null;

    /**
     * @var DailyActivity $DailyActivity
     */
    protected $DailyActivity = null;

    /**
     * @var DailyActivityAR $DailyActivityAR
     */
    protected $DailyActivityAR = null;

    /**
     * @var GuestActivity $GuestActivity
     */
    protected $GuestActivity = null;

    /**
     * @var PdfDocuments $PdfDocuments
     */
    protected $PdfDocuments = null;

    /**
     * @param ChequeDetail $ChequeDetail
     * @param ChequeTotal $ChequeTotal
     * @param DailyActivity $DailyActivity
     * @param DailyActivityAR $DailyActivityAR
     * @param GuestActivity $GuestActivity
     * @param PdfDocuments $PdfDocuments
     */
    public function __construct($ChequeDetail, $ChequeTotal, $DailyActivity, $DailyActivityAR, $GuestActivity, $PdfDocuments)
    {
        $this->ChequeDetail = $ChequeDetail;
        $this->ChequeTotal = $ChequeTotal;
        $this->DailyActivity = $DailyActivity;
        $this->DailyActivityAR = $DailyActivityAR;
        $this->GuestActivity = $GuestActivity;
        $this->PdfDocuments = $PdfDocuments;
    }

    /**
     * @return ChequeDetail
     */
    public function getChequeDetail()
    {
        return $this->ChequeDetail;
    }

    /**
     * @param ChequeDetail $ChequeDetail
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setChequeDetail($ChequeDetail)
    {
        $this->ChequeDetail = $ChequeDetail;
        return $this;
    }

    /**
     * @return ChequeTotal
     */
    public function getChequeTotal()
    {
        return $this->ChequeTotal;
    }

    /**
     * @param ChequeTotal $ChequeTotal
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setChequeTotal($ChequeTotal)
    {
        $this->ChequeTotal = $ChequeTotal;
        return $this;
    }

    /**
     * @return DailyActivity
     */
    public function getDailyActivity()
    {
        return $this->DailyActivity;
    }

    /**
     * @param DailyActivity $DailyActivity
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setDailyActivity($DailyActivity)
    {
        $this->DailyActivity = $DailyActivity;
        return $this;
    }

    /**
     * @return DailyActivityAR
     */
    public function getDailyActivityAR()
    {
        return $this->DailyActivityAR;
    }

    /**
     * @param DailyActivityAR $DailyActivityAR
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setDailyActivityAR($DailyActivityAR)
    {
        $this->DailyActivityAR = $DailyActivityAR;
        return $this;
    }

    /**
     * @return GuestActivity
     */
    public function getGuestActivity()
    {
        return $this->GuestActivity;
    }

    /**
     * @param GuestActivity $GuestActivity
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setGuestActivity($GuestActivity)
    {
        $this->GuestActivity = $GuestActivity;
        return $this;
    }

    /**
     * @return PdfDocuments
     */
    public function getPdfDocuments()
    {
        return $this->PdfDocuments;
    }

    /**
     * @param PdfDocuments $PdfDocuments
     * @return \Gueststream\PMS\IQWare\API\DstCondoOwnerMonthlyStats
     */
    public function setPdfDocuments($PdfDocuments)
    {
        $this->PdfDocuments = $PdfDocuments;
        return $this;
    }
}
