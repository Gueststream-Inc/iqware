<?php

namespace Gueststream\PMS\IQWare\API;

class GroupRates
{

    /**
     * @var string $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var string $RateName
     */
    protected $RateName = null;

    /**
     * @var string $ShortRateName
     */
    protected $ShortRateName = null;

    /**
     * @var string $RateCurrencyID
     */
    protected $RateCurrencyID = null;

    /**
     * @var int $GroupInfos_ID
     */
    protected $GroupInfos_ID = null;

    /**
     * @var string $IsRateCodeTmpl
     */
    protected $IsRateCodeTmpl = null;

    /**
     * @param string $ID_RateCode
     * @param string $RateName
     * @param string $ShortRateName
     * @param string $RateCurrencyID
     * @param int $GroupInfos_ID
     * @param string $IsRateCodeTmpl
     */
    public function __construct($ID_RateCode, $RateName, $ShortRateName, $RateCurrencyID, $GroupInfos_ID, $IsRateCodeTmpl)
    {
        $this->ID_RateCode = $ID_RateCode;
        $this->RateName = $RateName;
        $this->ShortRateName = $ShortRateName;
        $this->RateCurrencyID = $RateCurrencyID;
        $this->GroupInfos_ID = $GroupInfos_ID;
        $this->IsRateCodeTmpl = $IsRateCodeTmpl;
    }

    /**
     * @return string
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param string $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateName()
    {
        return $this->RateName;
    }

    /**
     * @param string $RateName
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setRateName($RateName)
    {
        $this->RateName = $RateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortRateName()
    {
        return $this->ShortRateName;
    }

    /**
     * @param string $ShortRateName
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setShortRateName($ShortRateName)
    {
        $this->ShortRateName = $ShortRateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCurrencyID()
    {
        return $this->RateCurrencyID;
    }

    /**
     * @param string $RateCurrencyID
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setRateCurrencyID($RateCurrencyID)
    {
        $this->RateCurrencyID = $RateCurrencyID;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupInfos_ID()
    {
        return $this->GroupInfos_ID;
    }

    /**
     * @param int $GroupInfos_ID
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setGroupInfos_ID($GroupInfos_ID)
    {
        $this->GroupInfos_ID = $GroupInfos_ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsRateCodeTmpl()
    {
        return $this->IsRateCodeTmpl;
    }

    /**
     * @param string $IsRateCodeTmpl
     * @return \Gueststream\PMS\IQWare\API\GroupRates
     */
    public function setIsRateCodeTmpl($IsRateCodeTmpl)
    {
        $this->IsRateCodeTmpl = $IsRateCodeTmpl;
        return $this;
    }
}
