<?php

namespace Gueststream\PMS\IQWare\API;

class GroupInfos
{

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var string $GrpID
     */
    protected $GrpID = null;

    /**
     * @var int $ID_RateCodeTmpl
     */
    protected $ID_RateCodeTmpl = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var int $ManualType
     */
    protected $ManualType = null;

    /**
     * @var string $RateName
     */
    protected $RateName = null;

    /**
     * @var string $ShortRateName
     */
    protected $ShortRateName = null;

    /**
     * @var int $ID_RateReason
     */
    protected $ID_RateReason = null;

    /**
     * @var boolean $IsDefinitif
     */
    protected $IsDefinitif = null;

    /**
     * @var string $RateDescription
     */
    protected $RateDescription = null;

    /**
     * @var int $RateCurrencyID
     */
    protected $RateCurrencyID = null;

    /**
     * @var GroupReservations $GroupReservations
     */
    protected $GroupReservations = null;

    /**
     * @var GroupBalances $GroupBalances
     */
    protected $GroupBalances = null;

    /**
     * @var GroupRates $GroupRates
     */
    protected $GroupRates = null;

    /**
     * @param int $ID_Account
     * @param string $GrpID
     * @param int $ID_RateCodeTmpl
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param int $AccountNo
     * @param string $AccountName
     * @param int $ManualType
     * @param string $RateName
     * @param string $ShortRateName
     * @param int $ID_RateReason
     * @param boolean $IsDefinitif
     * @param string $RateDescription
     * @param int $RateCurrencyID
     * @param GroupReservations $GroupReservations
     * @param GroupBalances $GroupBalances
     * @param GroupRates $GroupRates
     */
    public function __construct($ID_Account, $GrpID, $ID_RateCodeTmpl, \DateTime $StartDate, \DateTime $EndDate, $AccountNo, $AccountName, $ManualType, $RateName, $ShortRateName, $ID_RateReason, $IsDefinitif, $RateDescription, $RateCurrencyID, $GroupReservations, $GroupBalances, $GroupRates)
    {
        $this->ID_Account = $ID_Account;
        $this->GrpID = $GrpID;
        $this->ID_RateCodeTmpl = $ID_RateCodeTmpl;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->AccountNo = $AccountNo;
        $this->AccountName = $AccountName;
        $this->ManualType = $ManualType;
        $this->RateName = $RateName;
        $this->ShortRateName = $ShortRateName;
        $this->ID_RateReason = $ID_RateReason;
        $this->IsDefinitif = $IsDefinitif;
        $this->RateDescription = $RateDescription;
        $this->RateCurrencyID = $RateCurrencyID;
        $this->GroupReservations = $GroupReservations;
        $this->GroupBalances = $GroupBalances;
        $this->GroupRates = $GroupRates;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrpID()
    {
        return $this->GrpID;
    }

    /**
     * @param string $GrpID
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setGrpID($GrpID)
    {
        $this->GrpID = $GrpID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeTmpl()
    {
        return $this->ID_RateCodeTmpl;
    }

    /**
     * @param int $ID_RateCodeTmpl
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setID_RateCodeTmpl($ID_RateCodeTmpl)
    {
        $this->ID_RateCodeTmpl = $ID_RateCodeTmpl;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return int
     */
    public function getManualType()
    {
        return $this->ManualType;
    }

    /**
     * @param int $ManualType
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setManualType($ManualType)
    {
        $this->ManualType = $ManualType;
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
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
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
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setShortRateName($ShortRateName)
    {
        $this->ShortRateName = $ShortRateName;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateReason()
    {
        return $this->ID_RateReason;
    }

    /**
     * @param int $ID_RateReason
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setID_RateReason($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefinitif()
    {
        return $this->IsDefinitif;
    }

    /**
     * @param boolean $IsDefinitif
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setIsDefinitif($IsDefinitif)
    {
        $this->IsDefinitif = $IsDefinitif;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateDescription()
    {
        return $this->RateDescription;
    }

    /**
     * @param string $RateDescription
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setRateDescription($RateDescription)
    {
        $this->RateDescription = $RateDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateCurrencyID()
    {
        return $this->RateCurrencyID;
    }

    /**
     * @param int $RateCurrencyID
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setRateCurrencyID($RateCurrencyID)
    {
        $this->RateCurrencyID = $RateCurrencyID;
        return $this;
    }

    /**
     * @return GroupReservations
     */
    public function getGroupReservations()
    {
        return $this->GroupReservations;
    }

    /**
     * @param GroupReservations $GroupReservations
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setGroupReservations($GroupReservations)
    {
        $this->GroupReservations = $GroupReservations;
        return $this;
    }

    /**
     * @return GroupBalances
     */
    public function getGroupBalances()
    {
        return $this->GroupBalances;
    }

    /**
     * @param GroupBalances $GroupBalances
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setGroupBalances($GroupBalances)
    {
        $this->GroupBalances = $GroupBalances;
        return $this;
    }

    /**
     * @return GroupRates
     */
    public function getGroupRates()
    {
        return $this->GroupRates;
    }

    /**
     * @param GroupRates $GroupRates
     * @return \Gueststream\PMS\IQWare\API\GroupInfos
     */
    public function setGroupRates($GroupRates)
    {
        $this->GroupRates = $GroupRates;
        return $this;
    }
}
