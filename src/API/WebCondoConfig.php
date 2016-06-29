<?php

namespace Gueststream\PMS\IQWare\API;

class WebCondoConfig
{

    /**
     * @var \DateTime $ShowGuestsSince
     */
    protected $ShowGuestsSince = null;

    /**
     * @var \DateTime $ShowWorkOrdersSince
     */
    protected $ShowWorkOrdersSince = null;

    /**
     * @var string $CustomLabelSubFolioA
     */
    protected $CustomLabelSubFolioA = null;

    /**
     * @var string $CustomLabelSubFolioB
     */
    protected $CustomLabelSubFolioB = null;

    /**
     * @var string $CustomLabelSubFolioC
     */
    protected $CustomLabelSubFolioC = null;

    /**
     * @var string $CustomLabelSubFolioD
     */
    protected $CustomLabelSubFolioD = null;

    /**
     * @var boolean $IsCCConfirmationToPL
     */
    protected $IsCCConfirmationToPL = null;

    /**
     * @var boolean $IsCCConfirmationToBldgGle
     */
    protected $IsCCConfirmationToBldgGle = null;

    /**
     * @var int $wcMinDayFromHotelDate
     */
    protected $wcMinDayFromHotelDate = null;

    /**
     * @var int $wcMaxDayFromHotelDate
     */
    protected $wcMaxDayFromHotelDate = null;

    /**
     * @var boolean $IsShowWorkOrderOnlyInClosedMonth
     */
    protected $IsShowWorkOrderOnlyInClosedMonth = null;

    /**
     * @var boolean $IsShowSubFolioA
     */
    protected $IsShowSubFolioA = null;

    /**
     * @var boolean $IsShowSubFolioB
     */
    protected $IsShowSubFolioB = null;

    /**
     * @var boolean $IsShowSubFolioC
     */
    protected $IsShowSubFolioC = null;

    /**
     * @var boolean $IsShowSubFolioD
     */
    protected $IsShowSubFolioD = null;

    /**
     * @var \DateTime $LoadTime
     */
    protected $LoadTime = null;

    /**
     * @var boolean $AllowOwnerBooking
     */
    protected $AllowOwnerBooking = null;

    /**
     * @var boolean $EnablePDFDownload
     */
    protected $EnablePDFDownload = null;

    /**
     * @var CondoActivityColumnsVisibility $ActivityColumnsVisibility
     */
    protected $ActivityColumnsVisibility = null;

    /**
     * @var CondoGuestHistoryColumnsVisibility $GuestHistoryColumnsVisibility
     */
    protected $GuestHistoryColumnsVisibility = null;

    /**
     * @var int $ID_Property
     */
    protected $ID_Property = null;

    /**
     * @var \DateTime $CurrentHotelDate
     */
    protected $CurrentHotelDate = null;

    /**
     * @var string $DefaultLanguage
     */
    protected $DefaultLanguage = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $OnlyClosedMonths
     */
    protected $OnlyClosedMonths = null;

    /**
     * @var boolean $ShowXMLActivity
     */
    protected $ShowXMLActivity = null;

    /**
     * @var boolean $ShowXMLStatement
     */
    protected $ShowXMLStatement = null;

    /**
     * @var boolean $ShowExpenses
     */
    protected $ShowExpenses = null;

    /**
     * @var boolean $IsGuestNegociateBooking
     */
    protected $IsGuestNegociateBooking = null;

    /**
     * @var int $ID_SrcBusinessNegociated
     */
    protected $ID_SrcBusinessNegociated = null;

    /**
     * @var int $ID_RateReasonNegociated
     */
    protected $ID_RateReasonNegociated = null;

    /**
     * @var int $ID_RateCodeNegociated
     */
    protected $ID_RateCodeNegociated = null;

    /**
     * @var boolean $AllowProfileUpdate
     */
    protected $AllowProfileUpdate = null;

    /**
     * @var boolean $ShowContractDates
     */
    protected $ShowContractDates = null;

    /**
     * @var CondoActivityTypeEnum $CondoActivityType
     */
    protected $CondoActivityType = null;

    /**
     * @var boolean $ShowContractBalances
     */
    protected $ShowContractBalances = null;

    /**
     * @var boolean $ShowProfileBalances
     */
    protected $ShowProfileBalances = null;

    /**
     * @var boolean $ShowContractBalancesDetails
     */
    protected $ShowContractBalancesDetails = null;

    /**
     * @var boolean $ShowProfileBalancesDetails
     */
    protected $ShowProfileBalancesDetails = null;

    /**
     * @var boolean $ShowRoomTypeSoldOutAsAvailable
     */
    protected $ShowRoomTypeSoldOutAsAvailable = null;

    /**
     * @var string $Disclaimer
     */
    protected $Disclaimer = null;

    /**
     * @var boolean $ShowWorkOrdersPostedOnly
     */
    protected $ShowWorkOrdersPostedOnly = null;

    /**
     * @var boolean $DeduceRoomRevFromSAComm
     */
    protected $DeduceRoomRevFromSAComm = null;

    /**
     * @var int $MaxInitialContractsLoadWorkOrder
     */
    protected $MaxInitialContractsLoadWorkOrder = null;

    /**
     * @var boolean $ShowGHOnlyBookingTypeOwnerFriend
     */
    protected $ShowGHOnlyBookingTypeOwnerFriend = null;

    /**
     * @var boolean $ShowGHPastResa
     */
    protected $ShowGHPastResa = null;

    /**
     * @var boolean $ShowGHFutureResa
     */
    protected $ShowGHFutureResa = null;

    /**
     * @var boolean $ShowGuestHistoryMenu
     */
    protected $ShowGuestHistoryMenu = null;

    /**
     * @var boolean $ShowContractMenu
     */
    protected $ShowContractMenu = null;

    /**
     * @var boolean $ShowStatisticMenu
     */
    protected $ShowStatisticMenu = null;

    /**
     * @var boolean $ShowBookingOwnerFriendMenu
     */
    protected $ShowBookingOwnerFriendMenu = null;

    /**
     * @var boolean $ShowBookingGuestMenu
     */
    protected $ShowBookingGuestMenu = null;

    /**
     * @var boolean $ShowLoginPwdMenu
     */
    protected $ShowLoginPwdMenu = null;

    /**
     * @var boolean $ShowWorkOrderMenu
     */
    protected $ShowWorkOrderMenu = null;

    /**
     * @var boolean $AllowGuestBooking
     */
    protected $AllowGuestBooking = null;

    /**
     * @var boolean $ShowNewsMenu
     */
    protected $ShowNewsMenu = null;

    /**
     * @var boolean $AllowFractionalOwnerBooking
     */
    protected $AllowFractionalOwnerBooking = null;

    /**
     * @var boolean $ShowWorkOrderTechInfo
     */
    protected $ShowWorkOrderTechInfo = null;

    /**
     * @var boolean $ShowGrossRentalRevenu
     */
    protected $ShowGrossRentalRevenu = null;

    /**
     * @param \DateTime $ShowGuestsSince
     * @param \DateTime $ShowWorkOrdersSince
     * @param boolean $IsCCConfirmationToPL
     * @param boolean $IsCCConfirmationToBldgGle
     * @param int $wcMinDayFromHotelDate
     * @param int $wcMaxDayFromHotelDate
     * @param boolean $IsShowWorkOrderOnlyInClosedMonth
     * @param boolean $IsShowSubFolioA
     * @param boolean $IsShowSubFolioB
     * @param boolean $IsShowSubFolioC
     * @param boolean $IsShowSubFolioD
     * @param \DateTime $LoadTime
     * @param boolean $AllowOwnerBooking
     * @param boolean $EnablePDFDownload
     * @param CondoActivityColumnsVisibility $ActivityColumnsVisibility
     * @param CondoGuestHistoryColumnsVisibility $GuestHistoryColumnsVisibility
     * @param int $ID_Property
     * @param \DateTime $CurrentHotelDate
     * @param boolean $Active
     * @param boolean $OnlyClosedMonths
     * @param boolean $ShowXMLActivity
     * @param boolean $ShowXMLStatement
     * @param boolean $ShowExpenses
     * @param boolean $IsGuestNegociateBooking
     * @param int $ID_SrcBusinessNegociated
     * @param int $ID_RateReasonNegociated
     * @param int $ID_RateCodeNegociated
     * @param boolean $AllowProfileUpdate
     * @param boolean $ShowContractDates
     * @param CondoActivityTypeEnum $CondoActivityType
     * @param boolean $ShowContractBalances
     * @param boolean $ShowProfileBalances
     * @param boolean $ShowContractBalancesDetails
     * @param boolean $ShowProfileBalancesDetails
     * @param boolean $ShowRoomTypeSoldOutAsAvailable
     * @param boolean $ShowWorkOrdersPostedOnly
     * @param boolean $DeduceRoomRevFromSAComm
     * @param int $MaxInitialContractsLoadWorkOrder
     * @param boolean $ShowGHOnlyBookingTypeOwnerFriend
     * @param boolean $ShowGHPastResa
     * @param boolean $ShowGHFutureResa
     * @param boolean $ShowGuestHistoryMenu
     * @param boolean $ShowContractMenu
     * @param boolean $ShowStatisticMenu
     * @param boolean $ShowBookingOwnerFriendMenu
     * @param boolean $ShowBookingGuestMenu
     * @param boolean $ShowLoginPwdMenu
     * @param boolean $ShowWorkOrderMenu
     * @param boolean $AllowGuestBooking
     * @param boolean $ShowNewsMenu
     * @param boolean $AllowFractionalOwnerBooking
     * @param boolean $ShowWorkOrderTechInfo
     * @param boolean $ShowGrossRentalRevenu
     */
    public function __construct(\DateTime $ShowGuestsSince, \DateTime $ShowWorkOrdersSince, $IsCCConfirmationToPL, $IsCCConfirmationToBldgGle, $wcMinDayFromHotelDate, $wcMaxDayFromHotelDate, $IsShowWorkOrderOnlyInClosedMonth, $IsShowSubFolioA, $IsShowSubFolioB, $IsShowSubFolioC, $IsShowSubFolioD, \DateTime $LoadTime, $AllowOwnerBooking, $EnablePDFDownload, $ActivityColumnsVisibility, $GuestHistoryColumnsVisibility, $ID_Property, \DateTime $CurrentHotelDate, $Active, $OnlyClosedMonths, $ShowXMLActivity, $ShowXMLStatement, $ShowExpenses, $IsGuestNegociateBooking, $ID_SrcBusinessNegociated, $ID_RateReasonNegociated, $ID_RateCodeNegociated, $AllowProfileUpdate, $ShowContractDates, $CondoActivityType, $ShowContractBalances, $ShowProfileBalances, $ShowContractBalancesDetails, $ShowProfileBalancesDetails, $ShowRoomTypeSoldOutAsAvailable, $ShowWorkOrdersPostedOnly, $DeduceRoomRevFromSAComm, $MaxInitialContractsLoadWorkOrder, $ShowGHOnlyBookingTypeOwnerFriend, $ShowGHPastResa, $ShowGHFutureResa, $ShowGuestHistoryMenu, $ShowContractMenu, $ShowStatisticMenu, $ShowBookingOwnerFriendMenu, $ShowBookingGuestMenu, $ShowLoginPwdMenu, $ShowWorkOrderMenu, $AllowGuestBooking, $ShowNewsMenu, $AllowFractionalOwnerBooking, $ShowWorkOrderTechInfo, $ShowGrossRentalRevenu)
    {
        $this->ShowGuestsSince = $ShowGuestsSince->format(\DateTime::ATOM);
        $this->ShowWorkOrdersSince = $ShowWorkOrdersSince->format(\DateTime::ATOM);
        $this->IsCCConfirmationToPL = $IsCCConfirmationToPL;
        $this->IsCCConfirmationToBldgGle = $IsCCConfirmationToBldgGle;
        $this->wcMinDayFromHotelDate = $wcMinDayFromHotelDate;
        $this->wcMaxDayFromHotelDate = $wcMaxDayFromHotelDate;
        $this->IsShowWorkOrderOnlyInClosedMonth = $IsShowWorkOrderOnlyInClosedMonth;
        $this->IsShowSubFolioA = $IsShowSubFolioA;
        $this->IsShowSubFolioB = $IsShowSubFolioB;
        $this->IsShowSubFolioC = $IsShowSubFolioC;
        $this->IsShowSubFolioD = $IsShowSubFolioD;
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
        $this->AllowOwnerBooking = $AllowOwnerBooking;
        $this->EnablePDFDownload = $EnablePDFDownload;
        $this->ActivityColumnsVisibility = $ActivityColumnsVisibility;
        $this->GuestHistoryColumnsVisibility = $GuestHistoryColumnsVisibility;
        $this->ID_Property = $ID_Property;
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        $this->Active = $Active;
        $this->OnlyClosedMonths = $OnlyClosedMonths;
        $this->ShowXMLActivity = $ShowXMLActivity;
        $this->ShowXMLStatement = $ShowXMLStatement;
        $this->ShowExpenses = $ShowExpenses;
        $this->IsGuestNegociateBooking = $IsGuestNegociateBooking;
        $this->ID_SrcBusinessNegociated = $ID_SrcBusinessNegociated;
        $this->ID_RateReasonNegociated = $ID_RateReasonNegociated;
        $this->ID_RateCodeNegociated = $ID_RateCodeNegociated;
        $this->AllowProfileUpdate = $AllowProfileUpdate;
        $this->ShowContractDates = $ShowContractDates;
        $this->CondoActivityType = $CondoActivityType;
        $this->ShowContractBalances = $ShowContractBalances;
        $this->ShowProfileBalances = $ShowProfileBalances;
        $this->ShowContractBalancesDetails = $ShowContractBalancesDetails;
        $this->ShowProfileBalancesDetails = $ShowProfileBalancesDetails;
        $this->ShowRoomTypeSoldOutAsAvailable = $ShowRoomTypeSoldOutAsAvailable;
        $this->ShowWorkOrdersPostedOnly = $ShowWorkOrdersPostedOnly;
        $this->DeduceRoomRevFromSAComm = $DeduceRoomRevFromSAComm;
        $this->MaxInitialContractsLoadWorkOrder = $MaxInitialContractsLoadWorkOrder;
        $this->ShowGHOnlyBookingTypeOwnerFriend = $ShowGHOnlyBookingTypeOwnerFriend;
        $this->ShowGHPastResa = $ShowGHPastResa;
        $this->ShowGHFutureResa = $ShowGHFutureResa;
        $this->ShowGuestHistoryMenu = $ShowGuestHistoryMenu;
        $this->ShowContractMenu = $ShowContractMenu;
        $this->ShowStatisticMenu = $ShowStatisticMenu;
        $this->ShowBookingOwnerFriendMenu = $ShowBookingOwnerFriendMenu;
        $this->ShowBookingGuestMenu = $ShowBookingGuestMenu;
        $this->ShowLoginPwdMenu = $ShowLoginPwdMenu;
        $this->ShowWorkOrderMenu = $ShowWorkOrderMenu;
        $this->AllowGuestBooking = $AllowGuestBooking;
        $this->ShowNewsMenu = $ShowNewsMenu;
        $this->AllowFractionalOwnerBooking = $AllowFractionalOwnerBooking;
        $this->ShowWorkOrderTechInfo = $ShowWorkOrderTechInfo;
        $this->ShowGrossRentalRevenu = $ShowGrossRentalRevenu;
    }

    /**
     * @return \DateTime
     */
    public function getShowGuestsSince()
    {
        if ($this->ShowGuestsSince == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ShowGuestsSince);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ShowGuestsSince
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGuestsSince(\DateTime $ShowGuestsSince)
    {
        $this->ShowGuestsSince = $ShowGuestsSince->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShowWorkOrdersSince()
    {
        if ($this->ShowWorkOrdersSince == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ShowWorkOrdersSince);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ShowWorkOrdersSince
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowWorkOrdersSince(\DateTime $ShowWorkOrdersSince)
    {
        $this->ShowWorkOrdersSince = $ShowWorkOrdersSince->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabelSubFolioA()
    {
        return $this->CustomLabelSubFolioA;
    }

    /**
     * @param string $CustomLabelSubFolioA
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCustomLabelSubFolioA($CustomLabelSubFolioA)
    {
        $this->CustomLabelSubFolioA = $CustomLabelSubFolioA;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabelSubFolioB()
    {
        return $this->CustomLabelSubFolioB;
    }

    /**
     * @param string $CustomLabelSubFolioB
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCustomLabelSubFolioB($CustomLabelSubFolioB)
    {
        $this->CustomLabelSubFolioB = $CustomLabelSubFolioB;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabelSubFolioC()
    {
        return $this->CustomLabelSubFolioC;
    }

    /**
     * @param string $CustomLabelSubFolioC
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCustomLabelSubFolioC($CustomLabelSubFolioC)
    {
        $this->CustomLabelSubFolioC = $CustomLabelSubFolioC;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabelSubFolioD()
    {
        return $this->CustomLabelSubFolioD;
    }

    /**
     * @param string $CustomLabelSubFolioD
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCustomLabelSubFolioD($CustomLabelSubFolioD)
    {
        $this->CustomLabelSubFolioD = $CustomLabelSubFolioD;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCCConfirmationToPL()
    {
        return $this->IsCCConfirmationToPL;
    }

    /**
     * @param boolean $IsCCConfirmationToPL
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsCCConfirmationToPL($IsCCConfirmationToPL)
    {
        $this->IsCCConfirmationToPL = $IsCCConfirmationToPL;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCCConfirmationToBldgGle()
    {
        return $this->IsCCConfirmationToBldgGle;
    }

    /**
     * @param boolean $IsCCConfirmationToBldgGle
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsCCConfirmationToBldgGle($IsCCConfirmationToBldgGle)
    {
        $this->IsCCConfirmationToBldgGle = $IsCCConfirmationToBldgGle;
        return $this;
    }

    /**
     * @return int
     */
    public function getWcMinDayFromHotelDate()
    {
        return $this->wcMinDayFromHotelDate;
    }

    /**
     * @param int $wcMinDayFromHotelDate
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setWcMinDayFromHotelDate($wcMinDayFromHotelDate)
    {
        $this->wcMinDayFromHotelDate = $wcMinDayFromHotelDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getWcMaxDayFromHotelDate()
    {
        return $this->wcMaxDayFromHotelDate;
    }

    /**
     * @param int $wcMaxDayFromHotelDate
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setWcMaxDayFromHotelDate($wcMaxDayFromHotelDate)
    {
        $this->wcMaxDayFromHotelDate = $wcMaxDayFromHotelDate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowWorkOrderOnlyInClosedMonth()
    {
        return $this->IsShowWorkOrderOnlyInClosedMonth;
    }

    /**
     * @param boolean $IsShowWorkOrderOnlyInClosedMonth
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsShowWorkOrderOnlyInClosedMonth($IsShowWorkOrderOnlyInClosedMonth)
    {
        $this->IsShowWorkOrderOnlyInClosedMonth = $IsShowWorkOrderOnlyInClosedMonth;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowSubFolioA()
    {
        return $this->IsShowSubFolioA;
    }

    /**
     * @param boolean $IsShowSubFolioA
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsShowSubFolioA($IsShowSubFolioA)
    {
        $this->IsShowSubFolioA = $IsShowSubFolioA;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowSubFolioB()
    {
        return $this->IsShowSubFolioB;
    }

    /**
     * @param boolean $IsShowSubFolioB
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsShowSubFolioB($IsShowSubFolioB)
    {
        $this->IsShowSubFolioB = $IsShowSubFolioB;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowSubFolioC()
    {
        return $this->IsShowSubFolioC;
    }

    /**
     * @param boolean $IsShowSubFolioC
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsShowSubFolioC($IsShowSubFolioC)
    {
        $this->IsShowSubFolioC = $IsShowSubFolioC;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowSubFolioD()
    {
        return $this->IsShowSubFolioD;
    }

    /**
     * @param boolean $IsShowSubFolioD
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsShowSubFolioD($IsShowSubFolioD)
    {
        $this->IsShowSubFolioD = $IsShowSubFolioD;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLoadTime()
    {
        if ($this->LoadTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LoadTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LoadTime
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setLoadTime(\DateTime $LoadTime)
    {
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOwnerBooking()
    {
        return $this->AllowOwnerBooking;
    }

    /**
     * @param boolean $AllowOwnerBooking
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setAllowOwnerBooking($AllowOwnerBooking)
    {
        $this->AllowOwnerBooking = $AllowOwnerBooking;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePDFDownload()
    {
        return $this->EnablePDFDownload;
    }

    /**
     * @param boolean $EnablePDFDownload
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setEnablePDFDownload($EnablePDFDownload)
    {
        $this->EnablePDFDownload = $EnablePDFDownload;
        return $this;
    }

    /**
     * @return CondoActivityColumnsVisibility
     */
    public function getActivityColumnsVisibility()
    {
        return $this->ActivityColumnsVisibility;
    }

    /**
     * @param CondoActivityColumnsVisibility $ActivityColumnsVisibility
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setActivityColumnsVisibility($ActivityColumnsVisibility)
    {
        $this->ActivityColumnsVisibility = $ActivityColumnsVisibility;
        return $this;
    }

    /**
     * @return CondoGuestHistoryColumnsVisibility
     */
    public function getGuestHistoryColumnsVisibility()
    {
        return $this->GuestHistoryColumnsVisibility;
    }

    /**
     * @param CondoGuestHistoryColumnsVisibility $GuestHistoryColumnsVisibility
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setGuestHistoryColumnsVisibility($GuestHistoryColumnsVisibility)
    {
        $this->GuestHistoryColumnsVisibility = $GuestHistoryColumnsVisibility;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Property()
    {
        return $this->ID_Property;
    }

    /**
     * @param int $ID_Property
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setID_Property($ID_Property)
    {
        $this->ID_Property = $ID_Property;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentHotelDate()
    {
        if ($this->CurrentHotelDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CurrentHotelDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CurrentHotelDate
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCurrentHotelDate(\DateTime $CurrentHotelDate)
    {
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->DefaultLanguage;
    }

    /**
     * @param string $DefaultLanguage
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setDefaultLanguage($DefaultLanguage)
    {
        $this->DefaultLanguage = $DefaultLanguage;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyClosedMonths()
    {
        return $this->OnlyClosedMonths;
    }

    /**
     * @param boolean $OnlyClosedMonths
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setOnlyClosedMonths($OnlyClosedMonths)
    {
        $this->OnlyClosedMonths = $OnlyClosedMonths;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowXMLActivity()
    {
        return $this->ShowXMLActivity;
    }

    /**
     * @param boolean $ShowXMLActivity
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowXMLActivity($ShowXMLActivity)
    {
        $this->ShowXMLActivity = $ShowXMLActivity;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowXMLStatement()
    {
        return $this->ShowXMLStatement;
    }

    /**
     * @param boolean $ShowXMLStatement
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowXMLStatement($ShowXMLStatement)
    {
        $this->ShowXMLStatement = $ShowXMLStatement;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowExpenses()
    {
        return $this->ShowExpenses;
    }

    /**
     * @param boolean $ShowExpenses
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowExpenses($ShowExpenses)
    {
        $this->ShowExpenses = $ShowExpenses;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGuestNegociateBooking()
    {
        return $this->IsGuestNegociateBooking;
    }

    /**
     * @param boolean $IsGuestNegociateBooking
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setIsGuestNegociateBooking($IsGuestNegociateBooking)
    {
        $this->IsGuestNegociateBooking = $IsGuestNegociateBooking;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SrcBusinessNegociated()
    {
        return $this->ID_SrcBusinessNegociated;
    }

    /**
     * @param int $ID_SrcBusinessNegociated
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setID_SrcBusinessNegociated($ID_SrcBusinessNegociated)
    {
        $this->ID_SrcBusinessNegociated = $ID_SrcBusinessNegociated;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateReasonNegociated()
    {
        return $this->ID_RateReasonNegociated;
    }

    /**
     * @param int $ID_RateReasonNegociated
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setID_RateReasonNegociated($ID_RateReasonNegociated)
    {
        $this->ID_RateReasonNegociated = $ID_RateReasonNegociated;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeNegociated()
    {
        return $this->ID_RateCodeNegociated;
    }

    /**
     * @param int $ID_RateCodeNegociated
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setID_RateCodeNegociated($ID_RateCodeNegociated)
    {
        $this->ID_RateCodeNegociated = $ID_RateCodeNegociated;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowProfileUpdate()
    {
        return $this->AllowProfileUpdate;
    }

    /**
     * @param boolean $AllowProfileUpdate
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setAllowProfileUpdate($AllowProfileUpdate)
    {
        $this->AllowProfileUpdate = $AllowProfileUpdate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContractDates()
    {
        return $this->ShowContractDates;
    }

    /**
     * @param boolean $ShowContractDates
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowContractDates($ShowContractDates)
    {
        $this->ShowContractDates = $ShowContractDates;
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
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setCondoActivityType($CondoActivityType)
    {
        $this->CondoActivityType = $CondoActivityType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContractBalances()
    {
        return $this->ShowContractBalances;
    }

    /**
     * @param boolean $ShowContractBalances
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowContractBalances($ShowContractBalances)
    {
        $this->ShowContractBalances = $ShowContractBalances;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowProfileBalances()
    {
        return $this->ShowProfileBalances;
    }

    /**
     * @param boolean $ShowProfileBalances
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowProfileBalances($ShowProfileBalances)
    {
        $this->ShowProfileBalances = $ShowProfileBalances;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContractBalancesDetails()
    {
        return $this->ShowContractBalancesDetails;
    }

    /**
     * @param boolean $ShowContractBalancesDetails
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowContractBalancesDetails($ShowContractBalancesDetails)
    {
        $this->ShowContractBalancesDetails = $ShowContractBalancesDetails;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowProfileBalancesDetails()
    {
        return $this->ShowProfileBalancesDetails;
    }

    /**
     * @param boolean $ShowProfileBalancesDetails
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowProfileBalancesDetails($ShowProfileBalancesDetails)
    {
        $this->ShowProfileBalancesDetails = $ShowProfileBalancesDetails;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowRoomTypeSoldOutAsAvailable()
    {
        return $this->ShowRoomTypeSoldOutAsAvailable;
    }

    /**
     * @param boolean $ShowRoomTypeSoldOutAsAvailable
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowRoomTypeSoldOutAsAvailable($ShowRoomTypeSoldOutAsAvailable)
    {
        $this->ShowRoomTypeSoldOutAsAvailable = $ShowRoomTypeSoldOutAsAvailable;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }

    /**
     * @param string $Disclaimer
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setDisclaimer($Disclaimer)
    {
        $this->Disclaimer = $Disclaimer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowWorkOrdersPostedOnly()
    {
        return $this->ShowWorkOrdersPostedOnly;
    }

    /**
     * @param boolean $ShowWorkOrdersPostedOnly
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowWorkOrdersPostedOnly($ShowWorkOrdersPostedOnly)
    {
        $this->ShowWorkOrdersPostedOnly = $ShowWorkOrdersPostedOnly;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeduceRoomRevFromSAComm()
    {
        return $this->DeduceRoomRevFromSAComm;
    }

    /**
     * @param boolean $DeduceRoomRevFromSAComm
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setDeduceRoomRevFromSAComm($DeduceRoomRevFromSAComm)
    {
        $this->DeduceRoomRevFromSAComm = $DeduceRoomRevFromSAComm;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxInitialContractsLoadWorkOrder()
    {
        return $this->MaxInitialContractsLoadWorkOrder;
    }

    /**
     * @param int $MaxInitialContractsLoadWorkOrder
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setMaxInitialContractsLoadWorkOrder($MaxInitialContractsLoadWorkOrder)
    {
        $this->MaxInitialContractsLoadWorkOrder = $MaxInitialContractsLoadWorkOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGHOnlyBookingTypeOwnerFriend()
    {
        return $this->ShowGHOnlyBookingTypeOwnerFriend;
    }

    /**
     * @param boolean $ShowGHOnlyBookingTypeOwnerFriend
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGHOnlyBookingTypeOwnerFriend($ShowGHOnlyBookingTypeOwnerFriend)
    {
        $this->ShowGHOnlyBookingTypeOwnerFriend = $ShowGHOnlyBookingTypeOwnerFriend;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGHPastResa()
    {
        return $this->ShowGHPastResa;
    }

    /**
     * @param boolean $ShowGHPastResa
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGHPastResa($ShowGHPastResa)
    {
        $this->ShowGHPastResa = $ShowGHPastResa;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGHFutureResa()
    {
        return $this->ShowGHFutureResa;
    }

    /**
     * @param boolean $ShowGHFutureResa
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGHFutureResa($ShowGHFutureResa)
    {
        $this->ShowGHFutureResa = $ShowGHFutureResa;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGuestHistoryMenu()
    {
        return $this->ShowGuestHistoryMenu;
    }

    /**
     * @param boolean $ShowGuestHistoryMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGuestHistoryMenu($ShowGuestHistoryMenu)
    {
        $this->ShowGuestHistoryMenu = $ShowGuestHistoryMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContractMenu()
    {
        return $this->ShowContractMenu;
    }

    /**
     * @param boolean $ShowContractMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowContractMenu($ShowContractMenu)
    {
        $this->ShowContractMenu = $ShowContractMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowStatisticMenu()
    {
        return $this->ShowStatisticMenu;
    }

    /**
     * @param boolean $ShowStatisticMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowStatisticMenu($ShowStatisticMenu)
    {
        $this->ShowStatisticMenu = $ShowStatisticMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowBookingOwnerFriendMenu()
    {
        return $this->ShowBookingOwnerFriendMenu;
    }

    /**
     * @param boolean $ShowBookingOwnerFriendMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowBookingOwnerFriendMenu($ShowBookingOwnerFriendMenu)
    {
        $this->ShowBookingOwnerFriendMenu = $ShowBookingOwnerFriendMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowBookingGuestMenu()
    {
        return $this->ShowBookingGuestMenu;
    }

    /**
     * @param boolean $ShowBookingGuestMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowBookingGuestMenu($ShowBookingGuestMenu)
    {
        $this->ShowBookingGuestMenu = $ShowBookingGuestMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowLoginPwdMenu()
    {
        return $this->ShowLoginPwdMenu;
    }

    /**
     * @param boolean $ShowLoginPwdMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowLoginPwdMenu($ShowLoginPwdMenu)
    {
        $this->ShowLoginPwdMenu = $ShowLoginPwdMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowWorkOrderMenu()
    {
        return $this->ShowWorkOrderMenu;
    }

    /**
     * @param boolean $ShowWorkOrderMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowWorkOrderMenu($ShowWorkOrderMenu)
    {
        $this->ShowWorkOrderMenu = $ShowWorkOrderMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowGuestBooking()
    {
        return $this->AllowGuestBooking;
    }

    /**
     * @param boolean $AllowGuestBooking
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setAllowGuestBooking($AllowGuestBooking)
    {
        $this->AllowGuestBooking = $AllowGuestBooking;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowNewsMenu()
    {
        return $this->ShowNewsMenu;
    }

    /**
     * @param boolean $ShowNewsMenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowNewsMenu($ShowNewsMenu)
    {
        $this->ShowNewsMenu = $ShowNewsMenu;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowFractionalOwnerBooking()
    {
        return $this->AllowFractionalOwnerBooking;
    }

    /**
     * @param boolean $AllowFractionalOwnerBooking
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setAllowFractionalOwnerBooking($AllowFractionalOwnerBooking)
    {
        $this->AllowFractionalOwnerBooking = $AllowFractionalOwnerBooking;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowWorkOrderTechInfo()
    {
        return $this->ShowWorkOrderTechInfo;
    }

    /**
     * @param boolean $ShowWorkOrderTechInfo
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowWorkOrderTechInfo($ShowWorkOrderTechInfo)
    {
        $this->ShowWorkOrderTechInfo = $ShowWorkOrderTechInfo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGrossRentalRevenu()
    {
        return $this->ShowGrossRentalRevenu;
    }

    /**
     * @param boolean $ShowGrossRentalRevenu
     * @return \Gueststream\PMS\IQWare\API\WebCondoConfig
     */
    public function setShowGrossRentalRevenu($ShowGrossRentalRevenu)
    {
        $this->ShowGrossRentalRevenu = $ShowGrossRentalRevenu;
        return $this;
    }
}
